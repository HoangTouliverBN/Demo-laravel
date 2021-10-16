@extends('web.index')

@section('content')
    <div class="container">
        <h1>Giỏ hàng của {{ Auth::user()->name }}</h1>

        @if (count($shoppingCart) == 0)
            <p>Không có sản phẩm nảo trong giỏ hàng của bạn</p>
        @else
            <form action="{{ url('/shoppingCart/pay') }}" method="POST" id="form-pay">
                @csrf
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col-15">Ảnh sản phẩm</th>

                            <th scope="col">Tên sản phẩm</th>

                            <th scope="col">Đơn giá</th>

                            <th scope="col">Số lượng</th>

                            <th scope="col">Thành tiền</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shoppingCart as $cart)
                            <tr scope="row">
                                <td class="shopping-cart-text"><img src="{{ Storage::disk('AnhSach')->url($cart->AnhSP) }}"
                                        class="table-img" alt="..."></td>
                                <td class="shopping-cart-text">{{ $cart->TenSach }}</td>
                                <td class="shopping-cart-text" id="don_gia_{{ $cart->id }}">{{ $cart->DonGia }}</td>
                                <td class="shopping-cart-text">
                                    <input type="number" class="form-controll input-number"
                                        id="input-number-{{ $cart->id }}" name='so_luong[]' 
                                        onkeydown="return false"  value="" min="1"
                                        max="100">
                                </td>
                                <td class="shopping-cart-text"><input id="tong_gia_{{ $cart->id }}" type="number"
                                        disabled value="" name="tong_gia{{ $cart->id }}">
                                </td>
                                <td class="shopping-cart-text">
                                    <a href="{{ url('shoppingCart/delete/' . $cart->id) }}" id="btn-delete" style="border: none;
                                            background-color: WHITE; color:#007bff;"><i class="fas fa-trash"></i>
                                        <a>
                                </td>
                                <input type="number" class="d-none" readonly value="{{ $cart->id }}"
                                    name="id[]">
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right">
                    <p class="d-inline">Tổng tiền đơn hàng: <input type="number" name="money" id='price' readonly></p>
                    <button type="submit" class='btn btn-primary'>Thanh toán</button>
                </div>
            </form>
        @endif
        <p class="error"> @error('so_luong[]')
                {{ $message }}
            @enderror</p>
    </div>

@endsection
