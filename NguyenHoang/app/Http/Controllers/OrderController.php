<?php

namespace App\Http\Controllers;

use App\Models\Order;
use GuzzleHttp\Promise\Create;
use Illuminate\Foundation\Auth\User;
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

    public function index(Order $quanlyorder)
    {
        $user_id = $quanlyorder->id; 


        $orders = Order::join('users','users.id','=','order.user_id')
        ->join('user_information','user_information.user_id','=','users.id')
        ->get(['email','order.name','user_information.phone_number']);


        $quanlyorder = Order::paginate(10);
        return view('backend.quanlyorder.index',compact('quanlyorder','orders'));
    }


}
