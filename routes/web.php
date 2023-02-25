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

Route::get('/', function () {
    return view('macusi-expl');
});

Route::get('/construction', function (){
    return view('construction');
});
Route::get('c-est-quoi', function (){
    return view('macusi-expl');
});

Route::get('/dictionary', [DicoController::class, 'index'])->name('dico.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group([
   'prefix' => '/user',
   'as' => 'user.'
], function() {
    Route::get('/{id}', [ProfileController::class, 'index'])->name('profile.index')
        ->where('id', '[0-9]+');
});

Route::group([
    'prefix' => '/admin',
    'as' => 'admin.'
], function() {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/members', [AdminController::class, 'members'])->name('members');
    Route::put('/members/{id}', [AdminController::class, 'toggleStatus'])->name('toggleStatus')
        ->where('id', '[0-9]+');
    Route::get('/members/{id}', [AdminController::class, 'edit'])->name('members.edit')
        ->where('id', '[0-9]+');
});

/**
 * PUT = Modification
 * POST = Insertion
 */
