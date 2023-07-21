<?php

namespace App\Providers;

use Google\Cloud\Translate\V2\TranslateClient;

trait TranslateTrait
{

    protected function translate($language, $trad)
    {
        $tradsArray = [$language => $trad];


        $translate = new TranslateClient([
            'key' => env('GOOGLE_TRANSLATE_API_KEY')
        ]);

        $available_languages = config('custom.available_languages');

        foreach ($available_languages as $available_language => $locale) {
            if(!array_key_exists($available_language, $tradsArray)){
                $result = $translate->translate($trad,[
                    'target' => $available_language
                ]);
                $tradsArray[$available_language] = $result['text'];
            }
        }
        return $tradsArray;
    }
}
