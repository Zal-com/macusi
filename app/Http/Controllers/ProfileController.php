<?php

namespace App\Http\Controllers;

use App\Models\MotTravail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ProfileController
{

    public function index(){
        return view('user.profile.index', [
            'user' => User::find(Auth::id()),
            'url' => 'index'
        ]);
    }

    public function edit($id){
        return view('user.profile.edit', [
        'user' => User::find(Auth::id()),
            'url' => 'edit'
        ]);
    }

    public function update($id){

        $user = User::find(Auth::id());

        request()->validate([
            'email' => ['required', 'string']
        ]);

        $user->update([
            'email' => request('email')
        ]);

        return redirect()->back()->with('success', 'Informations mises à jour avec succès');
    }

    public function submissionsIndex($id){
        return view('user.profile.submissions.index', [
            'submissions' => MotTravail::all()->where('submitter_sug', '=', Auth::id()),
            'url' => 'submissions'
        ]);
    }

    public function editPassword(){
        return view('user.profile.password.edit', [
            'url' => 'password'
        ]);
    }

    public function updatePassword(Request $request){

        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required',
            'newPassword' => ['required', 'confirmed']
        ]);
        if($validator->valid()){
            $user = User::find(Auth::id());
            $user->password = Hash::make($validator->valid()['newPassword_']);
            $user->save();
            return redirect()->route('user.profile.password.edit', ['lang' => app()->getLocale(), 'id' => Auth::id()])->with('success', 'Mot de passe modifié avec succès.');
        }
        else{
            return redirect()->route('user.profile.password.edit', ['lang' => app()->getLocale(), 'id' => Auth::id()])->with('error', 'Erreur lors de la modification. Veuillez réessayer.');
        }

    }
}
