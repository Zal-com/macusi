<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
