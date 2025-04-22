<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/account/login',[UserController::class,'ShowLogin'])->name('account.login')->middleware('guest');
Route::get('/account/register',[UserController::class,'ShowRegister'])->name('account.register')->middleware('guest');
Route::post('/account/login-user',[UserController::class,'LoginIndex'])->name('account.login.index')->middleware('guest');
Route::post('/account/register-user',[UserController::class,'ResgistrationIndex'])->name('account.register.index')->middleware('guest');


Route::get('/account/dashboard',[UserController::class,'ShowDashboard'])->name('account.dashboard')->middleware('auth');
Route::get('/account/logout',[UserController::class,'logout'])->name('account.logout')->middleware('auth');

Route::get('/account/admin-dashboard',[UserController::class,'ShowAdminDashboard'])->name('admin.dashboard')->middleware('auth','admin');

