<?php

use App\Http\Controllers\FicheController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

 



require __DIR__.'/auth.php';
require __DIR__.'/members.php';



// fiche technique
Route::prefix('fiche')->group(function () {
    Route::name('fiche.')->group(function () {
        Route::get('/marques', [FicheController::class, 'marques'])->name("marques");
        Route::get('/marques/{marque}/modeles', [FicheController::class, 'modeles'])->name("modeles");
    });
});
 