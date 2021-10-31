<?php

namespace App\Http\Controllers;

use App\Mail\passwordReset;
use App\Models\resetPassword;
use Carbon\Carbon;
use App\Notifications\email_request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class resetPasswordController extends Controller
{
    public function ShowEmailRequest()
    {
        return view('login-register.emailRequest');
    }

    public function emailRequest(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $token = Str::random(60);
        $user = User::where('email', $request->input('email'))->first();
        if($user == null){
            return view('login-register.emailRequest')->with('error','Tài khoản này chưa được đăng ký');
        }
        $passwordReset = resetPassword::updateOrInsert([
            'email' => $user->email,
        ],[
            'token' => $token,
        ]);
        // dd($passwordReset);
        if ($passwordReset) {
            Mail::to($user->email)->send(new passwordReset($token, $user->emai));
        }

        return redirect('/')->with('message', 'Hãy kiểm tra email của bạn');
    }

    public function showResetPassword($token)
    {
        $password = resetPassword::where('token', $token)->first();
        if ($password !== null) {
            return view('login-register.resetPassword', compact('token'));
        }
        return redirect($token);
    }
}
