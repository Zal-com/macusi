<?php

namespace App\Http\Controllers;

use App\Models\Mot;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;

class DicoController extends Controller
{
    /**
     * Shows the listing of all existing words in the dictionary
     */
    public function index()
    {
        return view('dictionary.index', [
            'mots' => Mot::where('id', '>=', 65)->paginate(48)
        ]);
    }
}
