<?php

namespace App\Http\Controllers;

use App\Models\MotTravail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

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
            'submissions' => MotTravail::all()->where('submitter_sug', '=', Auth::user()->username),
            'url' => 'submissions'
        ]);
    }
}
