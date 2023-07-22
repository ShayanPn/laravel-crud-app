<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// Dashboard Routes
Route::get('/',[MainController::class,'showDashboardPage'])->name('Dashboard');
// Login & Logout Routes
Route::get('/login',[MainController::class,'showLoginPage'])->name('login');
Route::get('/register',[MainController::class,'showRegisterPage'])->name('register');
Route::post('/register',[UserController::class,'registerFunc']);
Route::post('/login',[UserController::class,'loginFunc']);

// Record Routes
Route::get('/records',[MainController::class,'showRecordPage'])->name('Records');
Route::post('/records',[RecordController::class,'createRecordFunc']);
Route::get('/create-record',[MainController::class,'showCreateRecordPage']);
Route::post('/create-record',[RecordController::class,'createRecordFunc']);
Route::get('/record/{record}',[RecordController::class,'singleViewFunc']);
Route::get('/record/update/{record}',[RecordController::class,'showUpdateRecord']);
Route::put('/record/update/{record}',[RecordController::class,'updateRecordFunc'])->name('updateRecord');
Route::get('/record/delete/{record}',[RecordController::class,'showDeletePage']);
Route::delete('/record/delete/{record}',[RecordController::class,'deleteRecordFunc'])->name('deleterec');

// Forgot Password
Route::get('/forgot-password',[UserController::class,'showForgotPasswordPage'])->name('forgotpassword.get');
Route::get('/reset-password/{token}',[UserController::class,'showResetPasswordPage'])->name('resetpassword.get');
Route::post('/forgot-password',[UserController::class,'forgotPasswordFunc']);
Route::post('/reset-password',[UserController::class,'resetPasswordFunc'])->name('reset.password.post');

// Users
Route::get('/users',[UserController::class,'showUsersPage'])->name('users');
