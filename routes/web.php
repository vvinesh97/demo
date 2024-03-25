<?php

use App\Http\Controllers\HomeControlle;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RejistrationController;
use Illuminate\Support\Facades\Route;



Route::post('save-user', [RejistrationController::class, 'save'])->name('save.user');
Route::get('forgetPassword', [LoginController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('resetPassword/{token}', [LoginController::class, 'resetPassword'])->name('resetPassword');
Route::post('do-resetPassword', [LoginController::class, 'doresetPassword'])->name('doresetPassword');
Route::post('do-forgetPassword', [LoginController::class, 'doforgetPassword'])->name('doforgetPassword');
Route::post('dologin', [LoginController::class, 'doLogin'])->name('dologin');

Route::group(['middleware' => 'isLogin'], function () {

Route::get('/', [HomeControlle::class, 'index'])->name('home');
Route::get('about', [HomeControlle::class, 'about'])->name('about');
Route::get('contact', [HomeControlle::class, 'contact'])->name('contact');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
 });

 Route::group(['middleware' => 'alreadyLoggedIn'], function () {
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::get('register', [RejistrationController::class, 'Registration'])->name('register');
});

