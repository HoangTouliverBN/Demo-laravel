<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\user_information;
use Symfony\Component\Console\Input\Input;

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
            'password' => ['required'],
        ]);
        User::create(array_merge($request->input(), [
            'id_phanquyen' => 2,
        ]));

        return redirect('login');
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
            'password' => ['required'],
        ]);
        User::create(array_merge($request->input(), [
            'id_phanquyen' => 2,
        ]));

        return redirect('home');
    }



    public function UserInformartion(user_information $user_information)
    {
        $user_id = Auth::user()->id;
        $value = user_information::where('user_id', $user_id)->first();

        return view('user.index', compact('value'));

    }

    public function ShowFormInformation(user_information $user_information)
    {
        $user_id = Auth::user()->id;
        $value = user_information::where('user_id', $user_id)->first();
        return view('user.update_information', compact('value'));
    }

    public function UpdateInformation(user_information $user_information, Request $request)
    {
        $user_id = Auth::user()->id;
        $check = user_information::where('user_id', $user_id)->first();
        $fileName = "";

        $request->validate([
            'avatar'=>('image'),
        ]);

        $file = $request->file('avatar') ?? null;
        if($file != null){
            $fileName = $file->getClientOriginalName();
        }
        

        $first_name = $request->input('first_name') ?? '';
        
        $last_name = $request->input('last_name') ?? '';
        $phone_number = $request->input('phone_number') ?? '';
        $address = $request->input('address') ?? '';
        $birthday = $request->input('birthday') ?? '';
        // return $birthday;

        if ($check == null) {
            $user_information = user_information::create([
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'phone_number'=>$phone_number,
                'address'=>$address,
                'birthday'=>$birthday,
                'avatar'=>$fileName,
                'user_id'=>$user_id,
            ]);
        } else {
            $user_information = user_information::update([
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'phone_number'=>$phone_number,
                'address'=>$first_name,
                'birthday'=>$birthday,
                'avatar'=>$fileName,
                'user_id'=>$user_id,
            ]);
        }
        if($user_information){
            $file->storeAs('',$fileName,'Avatar');
        }
        return redirect('user-information');
    }
}
