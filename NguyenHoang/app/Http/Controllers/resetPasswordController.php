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

        $length = 60;
        $user = User::where('email', $request->input('email'))->firstOrFail();
        $passwordReset = resetPassword::updateOrCreate([
            'email' => $user->email,
        ], [
            'token' => Str::random($length),
        ]);
        // dd($passwordReset->email);
        if ($passwordReset) {
            Mail::to($passwordReset->email)->send(new passwordReset($passwordReset->token, $passwordReset->email));
        }

        return redirect('/')->with('message', 'Hãy kiểm tra email của bạn');
    }

    public function showResetPassword($token)
    {
        $password = resetPassword::where('token', $token)->first();
        if ($password !== null) {
            return view('login-register.resetPassword', compact('token'));
        }
        return redirect('/')->with('message', 'Liên kết của bạn đến trang web không tồn tại hoặc đã bị gỡ');
    }
}