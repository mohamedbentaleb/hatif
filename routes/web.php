<?php

use App\Http\Controllers\FicheController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\UsersController;

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


Route::resource('/', FrontController::class);
Route::get('/annonces', [AdsController::class, 'index'])->name('annonces.index');
Route::post('/annonces', [AdsController::class, 'store'])->name('annonces.store');
Route::get('/annonces/list', [AdsController::class, 'list'])->name('annonces.list');
Route::get('/annonces/detail', [AdsController::class, 'detail'])->name('annonces.detail');


Route::middleware('auth')->group(function () {
    Route::get('/profil', [UsersController::class, 'index'])
                ->name('profil');
});

 



require __DIR__.'/auth.php';
require __DIR__.'/members.php';



// fiche technique
Route::prefix('fiche')->group(function () {
    Route::name('fiche.')->group(function () {
        Route::get('/marques', [FicheController::class, 'marques'])->name("marques");
        Route::get('/{marque}/modeles', [FicheController::class, 'modeles'])->name("modeles");
        Route::get('/{marque}/{modele}/detail', [FicheController::class, 'detail'])->name("fichetechnique");
    });
});
 