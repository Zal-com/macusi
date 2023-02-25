<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Core\File;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        if(!Gate::allows('access-admin')){
            return redirect()->route('home');
        }
        return view('admin.index');
    }

    public function members(){
        if(!Gate::allows('access-admin')){
            return redirect()->route('home');
        }
        return view('admin.membres.index',[
            'members' => User::all()
        ]);
    }

    public function toggleStatus($id){

        $user = User::find($id);
        switch ($user->status){
            case 0 :
                $user->status = 1;
                break;
            case 2:
            case 1 :
                $user->status = 0;
                break;
        }

        $user->save();
        return redirect()->route('admin.members')->with('success', 'Utilisateur modifié avec succès');
    }

    public function edit($id){
        return view('admin.membres.edit', [
           'member' =>  $user = User::find($id)
        ]);
    }
}
