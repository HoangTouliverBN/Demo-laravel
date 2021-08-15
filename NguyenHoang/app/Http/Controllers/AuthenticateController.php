<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthenticateController extends Controller
{

    public function ShowRegister()
    {
        return view('login-register.register');
    }

    public function Register(Request $request)
    {
        $request->validate([
            'email'=>['required','email','unique:users,email'],
            'name'=>['required'],
            'password'=>['required'],
        ]);

        User::create($request->input());

        return view('login-register.login');
    }

    // Login
    public function ShowLogin()
    {
        return view('login-register.login');
    }



    public function authenticate(Request $request)
    {
        $request->validate([
            'email'=>['required','email'],
            'password'=>'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('home');
        } else {
            return view('login-register.login')->with('message','Sai tài khoản hoặc mật khẩu');
        }

        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
}