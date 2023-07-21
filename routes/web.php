<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\VerificationController;
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

    Auth::routes();

    Route::get('construction', function (){
        return view('construction');
    })->name('construction');
    Route::get('c-est-quoi', function (){
        return view('macusi-expl');
    })->name('c-est-quoi');

    Route::get('dictionary', [DicoController::class, 'index'])->name('dico.index');
    //Route::get('/dictionary/create', [DicoController::class, 'create'])->name('dictionary.create');
    //Route::post('/dictionary/store', [DicoController::class, 'store'])->name('dictionary.store');

    Route::get('translate',[TranslateController::class, 'translate'])->name('translate');

    Route::get('/privacy_and_policy', function (){
        return view('PrivacyPolicy' . \app()->getLocale());
    })->name('privacy-and-policy');

    Route::group([
        'prefix' => '/user/{id}',
        'as' => 'user.',
        'middleware' => ['verified']
    ], function() {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/edit', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/submissions', [ProfileController::class, 'submissionsIndex'])->name('profile.submissions.index');
        Route::get('/submit', [DicoController::class, 'create'])->name('submission.create');
        Route::post('/submit', [DicoController::class, 'store'])->name('submission.store');
        Route::get('/submission/{id_sug}/edit', [MotTravailController::class, 'edit'])->name('submission.edit')
            ->where('id_sug', '[0-9]+');
        Route::put('/submission/{id_sug}/edit', [MotTravailController::class, 'update'])->name('submission.update')
            ->where('id_sug
            ', '[0-9]+');
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

Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

/**
 * PUT = Modification
 * POST = Insertion
 */



