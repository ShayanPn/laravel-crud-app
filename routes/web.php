<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Dashboard Routes
Route::get('/',[MainController::class,'showDashboardPage']);
// Login & Logout Routes
Route::get('/login',[MainController::class,'showLoginPage']);
Route::get('/register',[MainController::class,'showRegisterPage']);
Route::post('/register',[UserController::class,'registerFunc']);
Route::post('/login',[UserController::class,'loginFunc']);

// Record Routes
Route::get('/records',[MainController::class,'showRecordPage']);
Route::get('/create-record',[MainController::class,'showCreateRecordPage']);
Route::post('/create-record',[RecordController::class,'createRecordFunc']);


