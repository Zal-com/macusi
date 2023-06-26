<?php

namespace App\Http\Controllers;
use App\Models\Mot;
use App\Models\Syllabe;
use App\Models\Type;
use Google\Cloud\Translate\V2\TranslateClient;
use Mockery\Adapter\Phpunit\TestListenerTrait;

class TranslateController extends Controller
{

    public function translate()
    {

        /*
         * Récupérer entièreté du dictionnaire
         * Pour chaque mot, récupérer traductions sous forme de tableau de données
         * Vérifier que toutes les traductions soient la en comparant le tableau custom.available_languages
         * Si manquement, ajout de la langue et de la traduction
         * Passage au mot suivant
         *
         */
        $translate = new TranslateClient([
            'key' => env('GOOGLE_TRANSLATE_API_KEY')
        ]);
        $available_languages = config('custom.available_languages');

        //$mots = Mot::all();
        //$mots = Syllabe::all();
        $mots = Type::all();
        foreach ($mots as $mot) {
            $trads_array = json_decode($mot->trads, flags: JSON_OBJECT_AS_ARRAY);

            foreach ($available_languages as $language){
                if(! array_key_exists($language, $trads_array)){
                    $result = $translate->translate($trads_array['FR'], [
                        'target' => $language
                    ]);
                    $trads_array[$language] = $result['text'];
                }
                //Array to JSON
                $trads = json_encode($trads_array);

                //Save object in db
                $mot->trads = $trads;
                $mot->save();
                //Passage au suivant
            }



        }


        /*
        $result = $translate->translate('Hello world', [
            'target' => 'fr'
        ]);

        dd($result);
        */
    }

    public function store(){

    }
}
