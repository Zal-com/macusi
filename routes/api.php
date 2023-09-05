<?php

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

Route::get('/search/{word}', [\App\Http\Controllers\DicoController::class, 'apiSearch']);
Route::get('/search/{lang}/{word}', [\App\Http\Controllers\DicoController::class, 'apiLangSearch']);
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
