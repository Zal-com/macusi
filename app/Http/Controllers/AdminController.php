<?php

namespace App\Http\Controllers;

use Faker\Core\File;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    /**
     * @throws AuthorizationException
     */
    public function index()
    {

        $this->authorize('access-admin');
        return view('admin.index');
    }
}
