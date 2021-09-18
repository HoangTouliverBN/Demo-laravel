<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $quanlyuser)
    {
        $quanlyuser = User::paginate(10);
        return view('backend.quanlyuser.index', compact('quanlyuser'));
    }

    public function show(User $quanlyuser)
    {
        $quanlyuser = User::join('user_information','user_information.user_id','=','users.id')
        ->first(['users.email','user_information.last_name','user_information.first_name','user_information.birthday','user_information.phone_number','user_information.address']);
        return view('backend.quanlyuser.show', compact('quanlyuser'));
    }
}
