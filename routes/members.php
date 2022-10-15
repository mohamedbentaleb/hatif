<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;



Route::get('/admin/users/login', [UserController::class, 'login'])->name('users.login');;
Route::resource('/admin/users', UserController::class);


//require __DIR__.'/auth.php';
