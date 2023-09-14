<?php

namespace App\Http\Controllers;

use App\Models\MotTravail;
use App\Models\Syllabe;
use Illuminate\Http\Request;
use App\Providers\TranslateTrait;
use Illuminate\Support\Facades\DB;

class MotTravailController extends Controller
{
    use TranslateTrait;
    public function edit($lang, $id, $id_sug){
        $submission = MotTravail::find($id_sug);

        return view('user.profile.submissions.edit', [
            'submission' => $submission,
            'syllabes' => Syllabe::all(),
            'url' => 'submissions'
        ]);

    }

    public function update(Request $request){
        $submission = MotTravail::find($request->get('id_sug'));

        $submission->mot1_sug = $request->get('syllabe_1');
        $submission->mot2_sug = $request->get('syllabe_2');
        $submission->mot3_sug = $request->get('syllabe_3');
        $submission->mot4_sug = $request->get('syllabe_4');
        $submission->mot5_sug = $request->get('syllabe_5');
        $submission->mot6_sug = $request->get('syllabe_6');
        $submission->enMacusi_sug = $request->get('enMacusi');


        $traductions = json_encode(
            $this->translate($request->get('language'), $request->get('traduction'))
        );

        $submission->trads_sug = $traductions;

        if($submission->save()){
            return redirect()->route('user.profile.submissions.index', [
                'lang'=>app()->getLocale(),
                'id' => \Auth::id()
            ])->with('success', __('Soumission modifiée avec succès.'));
        }
        else{
            return redirect()->route('user.submission.edit', [
                'lang'=>app()->getLocale(),
                'id'=>\Auth::id(),
                'id_sug' => $submission->id_sug
            ])->with('error', 'Erreur lors de l\'enregistrement. Veuillez rééssayer.');
        }
    }

    public function delete(Request $request){
        $submission = MotTravail::find($request->get('id'));
        if($request->get('submitter_id') == \Auth::id()){
            $submission->isValidated_sug = -1;
            return $submission->save()
                ? redirect()->route('user.profile.submissions.index', [
                    'lang' => app()->getLocale(),
                    'id' => \Auth::id()
                ])->with('success', __('Soumission supprimée avec succès.'))
                : redirect()->route('user.profile.submissions.index', [
                    'lang' => app()->getLocale(),
                    'id' => \Auth::id()
                ])->with('error', __('Erreur lors de la suppression.'));
        }
    }

    public function index(){

        $submissions = MotTravail::paginate(25)->sortBy(function($submission){
            return $submission->ratio();
        }, 1, true);

        return view('dictionary.submissions', [
            'submissions' => $submissions,
        ]);
    }
}
