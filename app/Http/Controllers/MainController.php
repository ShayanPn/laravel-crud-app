<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $allrecords = Record::all();
        $allusers = User::all();
        return view('dashboard',['records'=> $records,'allusers' => $allusers,'allrecords' => $allrecords]);
    }

    // Show Login Page
    public function showLoginPage(){
        if(auth()->check()){
            return redirect('/')->with('danger','You Muste Be Logged Out First');
        }
        return view('login');
    }

    // Show Register Page
    public function showRegisterPage(){
        if(auth()->check()){
            return redirect('/')->with('danger','You Muste Be Logged Out First');
        }
        return view('register');
    }
}
