<?php

namespace App\Http\Controllers;

use App\Models\financial;
use App\Models\Sach;
use App\Models\shoppingCart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class financialController extends Controller
{
    //
    public function index(financial $quanlydoanhthu)
    {
        $quanlydoanhthu = financial::orderBy('id', 'DESC')
            ->paginate(10);
        return view('backend.quanlydoanhthu.index', compact('quanlydoanhthu'));
    }

    public function pay(Request $request)
    {
        // request: money, [id]
        $soLuong = $request->input('so_luong');
        $id = $request->input('id');
        for ($i = 0; $i < count($id); $i++) {
            if (!$soLuong[$i] > 0) {
                return redirect(url('shoppingCart/cart'))->with('message', 'Xóa sản phẩm không muốn mua trước khi thanh toán');
            }
        }

        $check = false;
        for ($i = 0; $i < count($id); $i++) {
            $shoppingCart = shoppingCart::find($id[$i]);
            $sach = Sach::find($shoppingCart->sach_id);
            $oldSL = $sach->SoLuong;
            $newSL = $oldSL - $soLuong[$i];
            if ($newSL < 0) {
                return redirect(url('shoppingCart/cart'))->with('message', 'Cửa hàng không đủ số lượng sản phẩm bạn muốn mua');
            } else {
                $sach->update([
                    'SoLuong' => $newSL,
                ]);
            }
            $shoppingCart->update([
                'state' => $id[$i],
                'so_luong' => $soLuong[$i],
            ]);
            if ($shoppingCart) {
                $check = true;
            } else {
                $check = false;
            }
        }

        $user = User::find(Auth::user()->id);
        $money = $request->input('money');
        $email = $user->email;
        $user_id = $user->id;
        $createPay = financial::create([
            'email' => $email,
            'user_id' => $user_id,
            'money' => $money,
        ]);
        if ($check) {
            return redirect('/shoppingCart/cart')->with('message', 'Đơn hàng của bạn đã được thanh toán thành công');
        } else {
            return redirect('/shoppingCart/cart')->with('message', 'Đơn hàng của bạn thanh toán không thành công do hệ thống đang bảo trì');
        }
    }
}
