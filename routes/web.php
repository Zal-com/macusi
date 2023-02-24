<?php

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

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('can:access-admin');

Route::get('/dictionary', [\App\Http\Controllers\DicoController::class, 'index'])->name('dico.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
