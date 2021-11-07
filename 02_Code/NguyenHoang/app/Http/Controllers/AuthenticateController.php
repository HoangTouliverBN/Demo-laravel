<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\user_information;
use App\Rules\CheckPassword;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\Hash;
use App\Models\resetPassword;

class AuthenticateController extends Controller
{

    public function ShowRegister()
    {
        return view('login-register.register');
    }

    public function Register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'name' => ['required'],
            'password' => ['required', 'min:8'],
        ]);
        User::create(array_merge($request->input(), [
            'id_phanquyen' => 1,
        ]));

        return redirect('login')->with('message', 'Đăng ký thành công, đăng nhập lại bằng tài khoản vừa đăng ký');
    }

    // Login
    public function ShowLogin()
    {
        return view('login-register.login');
    }



    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('home');
        } else {
            return view('login-register.login')->with('message', 'Sai tài khoản hoặc mật khẩu');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }

    public function ShowRegisterAdmin()
    {
        return view('login-register.register-admin');
    }

    public function RegisterAdmin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'name' => ['required'],
            'password' => ['required', 'min:8'],
        ]);
        User::create(array_merge($request->input(), [
            'id_phanquyen' => 2,
        ]));

        return redirect('home');
    }

    public function ShowChangePassword()
    {
        return view('login-register.changePassword');
    }

    public function ChangePassword(Request $request)
    {

        $request->validate([
            'oldPassword' => ['required', new CheckPassword],
            'Password' => ['required', 'min:8'],
            'rePassword' => ['required', 'same:Password',],
        ]);

        $newPassword = $request->input('Password');

        $password = $newPassword;
        $user = User::find(Auth::user()->id);
        $user->update([
            'password' => $password
        ]);

        return redirect('home')->with('message', 'Đổi mật khẩu thành công');
    }

    public function resetPassword(Request $request, $token)
    {
        // dd($request->input('password'));
        $request->validate([
            'password' => ['required', 'min:8'],
            'confirm-password' => ['required', 'same:password'],
        ]);
        $password = resetPassword::where('token', $token)->first();
        $user = User::where('email', $password->email)->first();
        $user->update([
            'password' => $request->input('password'),
        ]);
        if ($user) {
            return redirect('/login')->with('Đặt lại mật khẩu thành công, hãy đăng nhập lại');
        }
    }
}
