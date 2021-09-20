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
        return redirect('/')->with('message','Đăng ký thành công');

    }

    public function index(Order $quanlyorder)
    {
        $user_id = $quanlyorder->id; 


        $orders = Order::join('users','users.id','=','order.user_id')
        ->join('user_information','user_information.user_id','=','users.id')
        ->get(['email','order.name','user_information.phone_number','order.state','order.id']);


        return view('backend.quanlyorder.index',compact('orders'));
    }
    
    public function updateState(Request $request,$id)
    {
        $quanlyorder = Order::find($id);
        $newState = $request->input('state');
        // dd($quanlyorder);

        $check = $quanlyorder->update([
            'state'=>$newState
        ]);
            // dd($check);

        return redirect('quanlyorder')->with('message','Cập nhật trạng thái đơn hàng thành công');
    }

    public function show(Order $quanlyorder){

        
        $quanlyorder = Order::join('users','users.id','=','order.user_id')
        ->join('user_information','user_information.user_id','=','users.id')
        ->first(['email','order.name','user_information.phone_number','order.state','order.id','user_information.address','order.description','user_information.first_name','user_information.last_name']);
        // dd($quanlyorder);
        return view('backend.quanlyorder.show', compact('quanlyorder'));
    }

    public function edit(Order $quanlyorder)
    {
        return view('backend.quanlyorder.edit', compact('quanlyorder'));
    }

    public function update(Order $quanlyorder, Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $quanlyorder->update($request->input());

        return redirect('quanlyorder')->with('message','Cập nhật đơn hàng thành công');
    }

    public function destroy(Order $quanlyorder)
    {
        $quanlyorder->delete();
        return redirect('quanlyorder')->with('message','Xóa đơn hàng thành công');
    }
}
