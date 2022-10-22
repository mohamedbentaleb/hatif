<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MemberController;



//Route::get('/admin/members/login', [UserController::class, 'login'])->name('members.login');
//Route::prefix('members')->name('members.')->group(function(){});

    Route::middleware('IsMember')->group(function(){

        Route::get('/admin/members/dashboard', [MemberController::class, 'index'])->name('members.index');
        
    });

require __DIR__.'/member_auth.php';
