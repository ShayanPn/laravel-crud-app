<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// Dashboard Routes
Route::get('/',[MainController::class,'showDashboardPage'])->name('dashboard')->middleware('auth');
// Login & Logout Routes
Route::get('/login',[MainController::class,'showLoginPage'])->name('login');
Route::get('/register',[MainController::class,'showRegisterPage'])->name('register');
Route::post('/register',[UserController::class,'registerFunc']);
Route::post('/login',[UserController::class,'loginFunc']);
Route::post('/logout',[UserController::class,'logoutFunc'])->name('logout');

// Record Routes
Route::get('/records',[MainController::class,'showRecordPage'])->name('records')->middleware('auth');
Route::post('/records',[RecordController::class,'createRecordFunc'])->middleware('auth');
Route::get('/create-record',[MainController::class,'showCreateRecordPage'])->middleware('auth');
Route::post('/create-record',[RecordController::class,'createRecordFunc'])->middleware('auth');
Route::get('/record/{record}',[RecordController::class,'singleViewFunc'])->middleware('auth');
Route::get('/record/update/{record}',[RecordController::class,'showUpdateRecord'])->middleware('auth');
Route::put('/record/update/{record}',[RecordController::class,'updateRecordFunc'])->name('updateRecord')->middleware('auth');
Route::get('/record/delete/{record}',[RecordController::class,'showDeletePage'])->middleware('auth');
Route::delete('/record/delete/{record}',[RecordController::class,'deleteRecordFunc'])->name('deleterec')->middleware('auth');

// Forgot Password
Route::get('/forgot-password',[UserController::class,'showForgotPasswordPage'])->name('forgotpassword.get');
Route::get('/reset-password/{token}',[UserController::class,'showResetPasswordPage'])->name('resetpassword.get');
Route::post('/forgot-password',[UserController::class,'forgotPasswordFunc']);
Route::post('/reset-password',[UserController::class,'resetPasswordFunc'])->name('reset.password.post');

// Users
Route::get('/users',[UserController::class,'showUsersPage'])->name('users')->middleware('auth');
Route::get('/user/{id}',[UserController::class,'showSingleViewUser'])->middleware('auth');
Route::get('/user/update/{id}',[UserController::class,'showUpdateUser'])->middleware('auth');
Route::put('/user/update/{id}',[UserController::class,'updateUserFunc'])->middleware('auth');
Route::get('/user/delete/{id}',[UserController::class,'showDeleteUserPage'])->name('delete.user')->middleware('auth');
Route::delete('/user/delete/{id}',[UserController::class,'deleteUserFunc'])->middleware('auth');
