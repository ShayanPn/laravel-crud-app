<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Exists;

class UserController extends Controller
{
    public function deleteUserFunc(User $id){
        $id->delete();
        return redirect('users')->with('danger','User Successfully Deleted');
    }
    public function showDeleteUserPage(User $id){
        return view('delete-user',['user' => $id]);
    }

    public function showUpdateUser(User $id){
        return view('update-user',['user' => $id]);
    }

    public function showSingleViewUser(User $id){
        return view('user-single-view',['user' => $id]);
    }

    public function showUsersPage(){
        $users = User::orderBy('created_at','desc')->paginate(10);
        return view('users',['users' => $users]);
    }

    public function forgotPasswordFunc(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $token = Str::random(64);


        $user = User::where('email',$request->email)->exists();
        $emailToken = DB::table('password_reset_tokens')->where('email',$request->email);
        if($emailToken){
            $emailToken->delete();
            if($user){
                DB::table('password_reset_tokens')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => Carbon::now()
                ]);
    
                Mail::send('emails.mail-template', ['token' => $token], function($message) use($request){
                    $message->to($request->email);
                    $message->subject('Reset Password');
                });
                return back()->with('success','Message Successfully Send');
            }
            return back()->with('danger','Email Does\'nt Exist!');
        }

    }

    // Reset Password Function
    public function resetPasswordFunc(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        $updatePassword = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();
        if(!$updatePassword){
            return back()->withInput()->with('danger','Invalid Token!');
        }
        User::where('email',$request->email)
                    ->update(['password' => bcrypt($request->password)]);
        
                    DB::table('password_reset_tokens')
                            ->where('email',$request->email)
                            ->delete();
        return redirect('/login')->with('success','Your Password Has Been Change!');
    }
    // Show Reset Password Page
    public function showResetPasswordPage($token){
        return view('reset-password',['token' => $token]);
    }

    // Forgot Password Function
    public function showForgotPasswordPage(){
        return view('forgot-password');
    }

    // Logout
    public function logoutFunc(){
        auth()->logout();
        return redirect('/login')->with('danger','You\'ve LoggedOut Successfully');
    }

    // Login User Function
    public function loginFunc(Request $request){
        $incommingFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(auth()->attempt(['email' => $incommingFields['email'],'password' => $incommingFields['password'] ])){
            session()->regenerate();
            return redirect('/')->with('success','User LoggedIn Successfully');
        }else{
            return redirect('/login)->with('danger','Email / Password Incorrect');
        }
    }


    // Register User Function
    public function registerFunc(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = new User;
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        if($request->hasFile('avatar')){
            $filename ='avatars/' .  time() . '.'. $request->file('avatar')->getClientOriginalExtension();
            $request->avatar->move(public_path('avatars'), $filename);
            $user->avatar = $filename;
        }

        $user->save();

        return redirect('/login')->with('success','User Successfully Created');

    }
}
