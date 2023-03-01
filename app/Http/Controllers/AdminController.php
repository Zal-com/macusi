<?php

namespace App\Http\Controllers;

use App\Models\Mot;
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

        return view('admin.index', [
            'url' => 'dashboard'
        ]);
    }

    public function members(){
        if(!Gate::allows('access-admin')){
            return redirect()->route('home');
        }

        return view('admin.membres.index',[
            'members' => User::all(),
            'url' => 'members'
        ]);
    }

    public function toggleStatus($id){
        if(!Gate::allows('access-admin')){
            return redirect()->route('home');
        }

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
        if(!Gate::allows('access-admin')){
            return redirect()->route('home');
        }

        return view('admin.membres.edit', [
           'member' =>  $user = User::find($id),
            'url' => 'members'
        ]);
    }

    public function dictionary(){
        if(!Gate::allows('access-admin')){
            return redirect()->route('home');
        }

        return view('admin.dictionary.index', [
            'mots' => Mot::paginate(20),
            'url' => 'dictionary'
        ]);
    }

    public function wordEdit($id){
        if(!Gate::allows('access-admin')){
            return redirect()->route('home');
        }

        return view('admin.dictionary.edit', [
            'mot' => Mot::find($id),
            'url' => 'dictionary'
        ]);

    }
}
