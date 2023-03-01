<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class ProfileController
{

    public function index($id){
        return view('user.profile.index', [
            'user' => User::find($id),
            'url' => 'index'
        ]);
    }

    public function edit($id){
        return view('user.profile.edit', [
            'user' => User::find($id),
            'url' => 'edit'
        ]);
    }

    public function update($id){

        $user = User::find($id);

        request()->validate([
            'email' => ['required', 'string']
        ]);

        $user->update([
            'email' => request('email')
        ]);

        return redirect()->back()->with('success', 'Informations mises à jour avec succès');


    }
}
