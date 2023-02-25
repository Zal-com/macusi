<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController
{

    public function index($id){
        return view('user.profile.index', [
            'user' => User::find($id)
        ]);
    }
}
