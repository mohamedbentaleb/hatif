<?php

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
Route::resource('/annonces', AdsController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profil', [UsersController::class, 'index'])
                ->name('profil');
});

require __DIR__.'/auth.php';
require __DIR__.'/members.php';
