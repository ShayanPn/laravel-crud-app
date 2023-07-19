<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // Login User Function
    public function loginFunc(Request $request){
        $incoommingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(auth()->attempt($incoommingFields)){
            return 'User LoggedIn Successfully';
        }else{
            return 'Email / Password Incorrect';
        }
    }


    // Register User Function
    public function registerFunc(Request $request){
        $incommingFields = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);
        User::create($incommingFields);
        return 'Record Succesfully Created';

    }
}
