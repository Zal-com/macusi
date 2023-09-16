<?php

namespace App\Http\Livewire;

use App\Models\User;
use GPBMetadata\Google\Api\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class FormContainer extends Component
{

    use AuthenticatesUsers;

    public $form = 'login';
    public $email;
    public $password;
    public $name;
    public $firstname;
    public $lastname;
    public $nationality;
    public $password_confirmation;
    public $remember;

    public $rules = [];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function submit(){
        $validatedData = $this->validate($this->rules);
        if($this->attemptLogin(Request::create('', 'GET', ['email' => $this->email, 'password' => $this->password, 'remember' => $this->remember]))){
            return redirect()->route('home', app()->getLocale());
        }
        else{
            $this->addError('fail', __('auth.failed'));
            $this->render();
        }
    }

    public function register(){

        $this->validate($this->rules);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'first_name' => $validated['firstname'],
            'last_name' => $validated['lastname'],
            'code_nationalite' => $validated['nationality']
        ]);


        if($this->attemptLogin(Request::create('', 'GET', ['email' => $validated['email'], 'password' => $validated['password']]))){
            return redirect()->route('home', app()->getLocale());
        }
        else{
            $this->addError('fail', __('auth.failed'));
            $this->render();
        }

    }

    public function render()
    {

        switch ($this->form){
            case 'login' : $this->rules = [
                'email' => 'required|email|min:8',
                'password' => 'required',
                'remember' => 'nullable'
            ];
            break;
            case 'register'  : $this->rules = [
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'name' => 'required|string|unique:users',
                'firstname'=> 'required|string',
                'lastname' => 'required|string',
                'nationality' => 'required|min:2|max:2',
                'password_confirmation' => 'required'
            ];
            break;
            case 'password' : $this->rules = [
                'email' => 'required|email'
            ];
            break;
        }


        return view("livewire.{$this->form}");
    }

    public function mount(){
        $this->form = 'login';
    }

    public function showRegister(){
        $this->form = 'register';
    }

    public function showLogin(){
        $this->form = 'login';
    }

    public function showPassword(){
        $this->form = 'password';
    }

}
