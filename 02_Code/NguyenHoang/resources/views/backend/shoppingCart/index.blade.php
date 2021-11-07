@extends('frontend.layout.admin')

@section('content')
    <div class="tab-pane fade show active" id="quanlyorder" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div>
            <div>
                <h1 class="text-center">Quản lý giỏ hàng</h1>
            </div><br>

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">Email</th>

                        <th scope="col">Tên sản phẩm</th>

                        <th scope="col">Số lượng</th>

                        <th scope="col">Tình trạng</th>

                        <th scope="col">Ngày thanh toán</th>

                        {{-- <th scope="col"></th> --}}


                    </tr>
                </thead>
                <tbody>
                    @foreach ($shoppingCart as $cart)
                        <tr>
                            <td scope="row">{{ $cart->email }}</td>
                            <td scope="row">{{ $cart->TenSach }}</td>
                            <td scope="row">{{ $cart->so_luong }}</td>
                            <td scope="row">{{ $cart->state != null ? 'Đã thanh toán' : 'Chưa thanh toán' }}</td>
                            <td scope="row">{{ $cart->state != null ? $cart->updated_at : '' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $shoppingCart->links('pagination::bootstrap-4') }}
        </div>



    @endsection
