<?php

namespace App\Http\Controllers;

use App\Models\Mot;
use App\Models\MotTravail;
use App\Models\Syllabe;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

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

    public function create(){
        return view('dictionary.create', [
            'syllabes' => Syllabe::all()
        ]);
    }

    public function store(){
        $validated = request()->validate([
            'syllabe_0' => 'required',
            'syllabe_1' => 'required_with:syllabe_2',
            'syllabe_2' => 'required_with:syllabe_3',
            'syllabe_3' => 'required_with:syllabe_4',
            'syllabe_4' => 'required_with:syllabe_5',
            'syllabe_5' => 'nullable',
            'enMacusi' => 'required|max:12',
            'concept' => 'required',
            'language' => 'required',
            'traduction' => 'required',
            'contextSentence' => 'required'
        ]);

        //TODO Appel de l'API de traduction REVERSO
        //TODO Ajouter valeur par defaut dateAjout Modele
        $motTravail = new MotTravail();
        $motTravail->mot1_sug = $validated['syllabe_0'];
        $motTravail->mot2_sug = $validated['syllabe_1'];
        $motTravail->mot3_sug = $validated['syllabe_2'];
        $motTravail->mot4_sug = $validated['syllabe_3'];
        $motTravail->mot5_sug = $validated['syllabe_4'];
        $motTravail->mot6_sug = $validated['syllabe_5'];
        $motTravail->enMacusi_sug = $validated['enMacusi'];
        $motTravail->trads_sug = json_encode(['FR'=> 'test']); //TODO Implémenter appel API
        $motTravail->explication_sug = 'test'; //TODO ajouter champs dans le formulaire
        $motTravail->isValidated_sug = 0; //TODO ajouter valeur par defaut Modele
        $motTravail->submitter_sug = Auth::user()->username;

        if($motTravail->save()){
            return redirect()->route('dictionary.create')->with('success', 'Mot soumis avec succès.');
        }



    }
}
