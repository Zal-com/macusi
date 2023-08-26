<?php

namespace App\Http\Livewire;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Livewire\Component;

class FormContainer extends Component
{

    use AuthenticatesUsers;

    public $form = 'login';

    public function render()
    {
        return view("livewire.{$this->form}");
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
