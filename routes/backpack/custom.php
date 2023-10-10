<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('mot', 'MotCrudController');
    Route::crud('mot-travail', 'MotTravailCrudController');
    Route::crud('syllabe', 'SyllabeCrudController');
    Route::crud('user-votes', 'UserVoteCrudController');
    Route::crud('nationalite', 'NationaliteCrudController');
    Route::crud('type', 'TypeCrudController');
    Route::crud('csv-data', 'CsvDataCrudController');
    Route::crud('type-mot', 'TypeMotCrudController');
    Route::crud('type-suggestion', 'TypeSuggestionCrudController');
    Route::crud('user', 'UserCrudController');
    Route::crud('user-vote', 'UserVoteCrudController');
}); // this should be the absolute last line of this file