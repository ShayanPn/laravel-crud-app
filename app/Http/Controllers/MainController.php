<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // Show Create Record Page
    public function showCreateRecordPage(){
        return view('create-record');
    }

    // Show Records Page
    public function showRecordPage(){
        $records = Record::orderBy('created_at','desc')->paginate(10);
        return view('records',['records' => $records]);
    }

    // Show Dashboard Page
    public function showDashboardPage(){
        $records = Record::orderBy('created_at','desc')->paginate(5);
        return view('dashboard',['records'=> $records]);
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
