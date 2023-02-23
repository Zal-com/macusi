<?php

namespace App\Http\Controllers;

use App\Models\Mot;
use http\Env\Response;
use Illuminate\Http\Request;

class DicoController extends Controller
{
    /**
     * Shows the listing of all existing words in the dictionary
     */
    public function index()
    {
        return view('dictionary.index', [
            'mots' => Mot::all()
        ]);
    }
}
