<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
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


Route::redirect('/', App::getLocale().'/home');

Route::group(['prefix' => '{lang}'], function (){
    Route::get('/home', function () {
        return view('macusi-expl');
    })->name('home');

    Auth::routes(['verify' => true]);

    Route::get('construction', function (){
        return view('construction');
    })->name('construction');
    Route::get('c-est-quoi', function (){
        return view('macusi-expl');
    })->name('c-est-quoi');

    Route::get('dictionary', [DicoController::class, 'index'])->name('dico.index');
    Route::get('/dictionary/create', [DicoController::class, 'create'])->name('dictionary.create');
    Route::post('/dictionary/store', [DicoController::class, 'store'])->name('dictionary.store');

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
        Route::get('/{id}/submissions', [ProfileController::class, 'submissionsIndex'])->name('profile.submissions.index')
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
        Route::get('/submissions', [AdminController::class, 'submissions'])->name('submissions');
    });
});

/**
 * PUT = Modification
 * POST = Insertion
 */



