<?php

namespace App\Http\Controllers;

use App\Models\Order;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function Order(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user_id = Auth::user()->id;

        $order = Order::create(array_merge($request->input(),[
            'user_id' => $user_id,
        ]));
        $value = 'Đăng ký thành công';
        return redirect('home')->with('value');

    }
}
