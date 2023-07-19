<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Dashboard Route
Route::get('/',[MainController::class,'showDashboardPage']);
// Login & Logout Route
Route::get('/login',[MainController::class,'showLoginPage']);
Route::get('/register',[MainController::class,'showRegisterPage']);
Route::post('/register',[UserController::class,'registerFunc']);
Route::post('/login',[UserController::class,'loginFunc']);

