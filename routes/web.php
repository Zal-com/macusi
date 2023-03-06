<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return redirect()->route('dico.index');
});

Route::get('/construction', function (){
    return view('construction');
});
Route::get('c-est-quoi', function (){
    return view('macusi-expl');
});

Route::get('/dictionary', [DicoController::class, 'index'])->name('dico.index');

Route::group([
    'prefix' => '/user',
    'as' => 'user.',
    'middleware' => ['verified']
], function() {
    Route::get('/{id}', [ProfileController::class, 'index'])->name('profile.index')
        ->where('id', '[0-9]+');
    Route::get('/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit')
        ->where('id', '[0-9]+');
    Route::put('/{id}/edit', [ProfileController::class, 'update'])->name('profile.update')
        ->where('id', '[0-9]+');
});

Route::group([
    'prefix' => '/admin',
    'as' => 'admin.',
    'middleware' => ['verified']
], function() {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/members', [AdminController::class, 'members'])->name('members');
    Route::put('/members/{id}', [AdminController::class, 'toggleStatus'])->name('toggleStatus')
        ->where('id', '[0-9]+');
    Route::get('/members/{id}', [AdminController::class, 'edit'])->name('members.edit')
        ->where('id', '[0-9]+');
    Route::get('/dictionary', [AdminController::class, 'dictionary'])->name('dictionary.index');
    Route::get('/dictionary/{id}/edit', [AdminController::class, 'wordEdit'])->name('dictionary.edit')
        ->where('id', '[0-9]+');
});



/**
 * PUT = Modification
 * POST = Insertion
 */



