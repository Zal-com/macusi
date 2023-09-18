<?php

use App\Models\Syllabe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Returns informations about a word in MaCuSi. Input is case insensitive.
 */
Route::get('dictionary/search', [\App\Http\Controllers\DicoController::class, 'apiSearch']);


Route::get('dictionary/{lang}/search', [\App\Http\Controllers\DicoController::class, 'apiLangSearch']);

/**
 * Returns informations about the 85 basic words of MaCuSi
 */
Route::get('/basics', function(){

    $words = \App\Models\Syllabe::all();

    foreach ($words as $word){
        foreach (config('custom.available_languages') as $key => $language){

            $word['traductions'] = json_decode($word->trads);
            unset($word->id);
        }
    }
    return response()->json($words);
});

/**
 * Returns the whole dictionary with traductions for the word and syllables of every word
 */
Route::get('/dictionary', function(){
    $words = \App\Models\Mot::all();

    foreach ($words as $word) {
        $word->traductions = json_decode($word->trads);

        for ($i = 1; $i <= 6; $i++) {
            if ($word->{'mot' . $i} == null) break;

            $word->{'mot' . $i} = Syllabe::select(['syllabe', 'trads'])->where('syllabe', $word->{'mot' . $i})->first();
            $word->{'mot' . $i}->traductions = json_decode($word->{'mot' . $i}->trads);
            unset($word->{'mot' . $i}->id);
        }
    }

    return response()->json($words);
});
