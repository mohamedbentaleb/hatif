<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:members')->group(function () {
    Route::get('/admin/members/register', [RegisteredUserController::class, 'create'])
                ->name('members.register');

    Route::post('/admin/members/register', [RegisteredUserController::class, 'store']);

    Route::get('/admin/members/login', [AuthenticatedSessionController::class, 'create'])
                ->name('members.login');

    Route::post('/admin/members/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/admin/members/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('members.password.request');

    Route::post('/admin/members/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('members.password.email');

    Route::get('/admin/members/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('members.password.reset');

    Route::post('/admin/members/reset-password', [NewPasswordController::class, 'store'])
                ->name('members.password.update');
});

Route::middleware('IsMember')->group(function () {
    Route::get('/admin/members/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('members.verification.notice');

    Route::get('/admin/members/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('members.verification.verify');

    Route::post('/admin/members/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('members.verification.send');

    Route::get('/admin/members/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('members.password.confirm');

    Route::post('/admin/members/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('/admin/members/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('members.logout');
});
