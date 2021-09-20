<?php

namespace App\Http\Controllers;

use App\Mail\passwordReset;
use Carbon\Carbon;
use App\Models\reset_password;
use App\Notifications\email_request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class resetPasswordController extends Controller
{
    public function ShowEmailRequest()
    {
        return view('login-register.emailRequest');
    }

    public function emailRequest(Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
        ]);

        $length = 60;
        $user = User::where('email',$request->input('email'))->firstOrFail();
        $passwordReset = reset_password::updateOrCreate([
            'email' => $user->email,
        ],[
            'token' => Str::random($length),
        ]);
        // dd($passwordReset->email);
        if($passwordReset){
            Mail::to($passwordReset->email)->send(new passwordReset($passwordReset->token,$passwordReset->email));
        }

        return redirect('/')->with('message','Hãy kiểm tra email của bạn');
    }

    public function showResetPassword($token)
    {
        return view('login-register.resetPassword',compact('token'));
    }
}
