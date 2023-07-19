<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Show Dashboard Page
    public function showDashboardPage(){
        return view('dashboard');
    }

    // Show Login Page
    public function showLoginPage(){
        return view('login');
    }

    // Show Register Page
    public function showRegisterPage(){
        return view('register');
    }
}
