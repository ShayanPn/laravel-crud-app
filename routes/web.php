<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Dashboard Routes
Route::get('/',[MainController::class,'showDashboardPage'])->name('Dashboard');
// Login & Logout Routes
Route::get('/login',[MainController::class,'showLoginPage']);
Route::get('/register',[MainController::class,'showRegisterPage']);
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
Route::delete('/record/delete/{records}',[RecordController::class,'deleteRecordFunc']);


