<?php

namespace App\Http\Controllers;

use App\Models\Mot;
use App\Models\MotTravail;
use App\Models\Syllabe;
use App\Models\Type;
use App\Models\TypeSug;
use App\Models\TypeSuggestion;
use App\Providers\PDFDicoManager;
use Codedge\Fpdf\Fpdf\Fpdf;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Providers\TranslateTrait;
use Illuminate\Support\Facades\DB;
use function MongoDB\BSON\toJSON;

class DicoController extends Controller
{
    use TranslateTrait;
    /**
     * Shows the listing of all existing words in the dictionary
     */
    public function index()
    {
        return view('dictionary.index', [
            'mots' => Mot::where('id', '>=', 65)->paginate(24)->onEachSide(1)
        ]);
    }

    public function create()
    {
        return view('dictionary.create', [
            'syllabes' => Syllabe::all(),
            'url' => 'create'
        ]);
    }

    public function store()
    {
        $validated = request()->validate([
            'syllabe_0' => 'required',
            'syllabe_1' => 'required_with:syllabe_2',
            'syllabe_2' => 'required_with:syllabe_3',
            'syllabe_3' => 'required_with:syllabe_4',
            'syllabe_4' => 'required_with:syllabe_5',
            'syllabe_5' => 'nullable',
            'type_1' => 'required',
            'type_2' => 'nullable',
            'enMacusi' => 'required|max:12',
            'concept' => 'required',
            'language' => 'required',
            'traduction' => 'required',
        ]);


        $motTravail = new MotTravail();
        $motTravail->mot1_sug = $validated['syllabe_0'];
        $motTravail->mot2_sug = $validated['syllabe_1'];
        $motTravail->mot3_sug = $validated['syllabe_2'];
        $motTravail->mot4_sug = $validated['syllabe_3'];
        $motTravail->mot5_sug = $validated['syllabe_4'];
        $motTravail->mot6_sug = $validated['syllabe_5'];
        $motTravail->enMacusi_sug = $validated['enMacusi'];
        $motTravail->trads_sug =  json_encode($this->translate($validated['language'], $validated['traduction']));
        $motTravail->submitter_sug = Auth::user()->id;

        if ($motTravail->save()) {

            $motTravail->id = DB::getPdo()->lastInsertId();

            if($validated['type_2'] != null){
                $type_2 = new TypeSuggestion();
                $type_2->id_type = $validated['type_2'];
                $type_2->id_sug = $motTravail->id;
                $type_2->save();
            }

            $type_1 = new TypeSuggestion();
            $type_1->id_type = $validated['type_1'];
            $type_1->id_sug = $motTravail->id;

            if($type_1->save()){
                return redirect()->route('user.submission.create', ['lang' => \app()->getLocale(), 'id' => Auth::id()])->with('success', 'Mot soumis avec succès.');
            }
        }

        return redirect()->route('user.submission.create', ['lang' => \app()->getLocale(), 'id' => Auth::id()])->with('error', 'Erreur lors de l\'opération');
    }

    // fonction de génération du PDF
    public function download($lang, $format){

        $filename = public_path() . '/storage/pdf/Dico' . $format . '_' . strtoupper(app()->getLocale()) . '.pdf';
        if(! file_exists($filename)){
            $this->generatePDF(app()->getLocale());
        }

        return \Illuminate\Support\Facades\Response::download($filename, 'Macusi_' . strtoupper(app()->getLocale()) . '.pdf', ['Content-Type: application/pdf']);
    }

    public function generatePDF($lang){

        $pdm = new PDFDicoManager();
        $pdm->createPDF($lang);

    }

    public function apiSearch(Request $request){

        $results = Mot::where('enMacusi', 'LIKE', $request->get('searchTerm'))->get();

        if($results == null){
            return response(404);
        }

        foreach ($results as $result) {
            $result->traductions = json_decode($result->trads);

            for ($i = 1; $i <= 6; $i++) {
                if ($result->{'mot' . $i} == null) break;

                $result->{'mot' . $i} = Syllabe::select(['syllabe', 'trads'])->where('syllabe', $result->{'mot' . $i})->first();
                $result->{'mot' . $i}->traductions = json_decode($result->{'mot' . $i}->trads);
                unset($result->{'mot' . $i}->id);
            }

            unset($result->id);
        }

        return response()->json($results);
    }

    public function apiLangSearch(String $lang, Request $request){
        $results = Mot::query()->whereRaw('JSON_VALUE(trads, "$.'. strtoupper($lang) .'") LIKE "' . $request->get('searchTerm') . '%"')->get();

        foreach ($results as $result) {
            $result->traductions = json_decode($result->trads);

            for ($i = 1; $i <= 6; $i++) {
                if ($result->{'mot' . $i} == null) break;

                $result->{'mot' . $i} = Syllabe::select(['syllabe', 'trads'])->where('syllabe', $result->{'mot' . $i})->first();
                $result->{'mot' . $i}->traductions = json_decode($result->{'mot' . $i}->trads);
                unset($result->{'mot' . $i}->id);
            }

            unset($result->id);
        }

        return response()->json($results);
    }

}
