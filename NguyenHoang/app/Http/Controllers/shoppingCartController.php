<?php

namespace App\Http\Controllers;

use App\Models\financial;
use App\Models\shoppingCart;
use App\Models\User as ModelsUser;
use App\Rules\quantitiesShoppingCart;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class shoppingCartController extends Controller
{
    public function shoppingCart(shoppingCart $shoppingCart)
    {
        $user_id = Auth::user()->id;
        $shoppingCart = shoppingCart::join('sach', 'sach.STT', '=', 'shopping_cart.sach_id')
            ->join('users', 'users.id', '=', 'shopping_cart.user_id')->where('user_id', $user_id)->where('state', null)
            ->get(['AnhSP', 'TenSach', 'DonGia', 'shopping_cart.id', 'shopping_cart.state']);
        // dd($shoppingCart);
        return view('web.ShoppingCart', compact('shoppingCart'));
    }

    public function addProduct($sach_id, shoppingCart $shoppingCart)
    {
        $user_id = Auth::user()->id;
        $email = Auth::user()->email;
        $shoppingCart = shoppingCart::create([
            'sach_id' => $sach_id,
            'user_id' => $user_id,
            'email' => $email,
        ]);
        if ($shoppingCart) {
            return redirect('/')->with('message', 'Thêm vào giỏ hàng thành công');
        }
        return redirect('/')->with('message', 'Thêm vào giỏ hàng thất bại');
    }
    public function destroy(shoppingCart $shoppingCart, $id)
    {
        $shoppingCart = shoppingCart::find($id)->delete();
        return redirect(url('shoppingCart'))->with('message', 'Xóa sản phẩm thành công');
    }

    public function index()
    {
        $shoppingCart = shoppingCart::join('sach','sach.STT','=','shopping_cart.sach_id')
        ->orderBy('id','DESC')
        ->paginate(9,['shopping_cart.*','sach.TenSach']);
        return view('backend.shoppingCart.index',compact('shoppingCart'));
    }
}
