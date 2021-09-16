@extends('frontend.layout.admin')

@section('content')
<div class="tab-pane fade show active" id="quanlyorder" role="tabpanel"
aria-labelledby="v-pills-home-tab">
<div>
    <div >
        <h1 class="text-center">Đơn đăng ký mua hàng</h1>
    </div><br>
    
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th scope="col">Tên sản phẩm</th>

                <th scope="col">Tài khoản đăng ký</th>

                <th scope="col">Số điện thoại</th>

                <th scope="col">Tình trạng</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td scope="row">{{$order->name}}</td>
                    <td scope="row">{{$order->email}}</td>
                    <td scope="row">{{$order->phone_number}}</td>
                    <td>
                        <a href="{{url('quanlyorder/'.$order->id)}}"><i class="far fa-eye"></i></a>
                        <a href="{{url('quanlyorder/'.$order->id.'/edit')}}"><i class="fas fa-pencil-alt"></i></a>
                        <a href="{{url('quanlyorder/'.$order->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa dữ liệu này?')"></a>
                        <form action="{{url('quanlyorder/'.$order->id)}}" class="d-inline" method="POST" onsubmit="return 'Bạn có chắc chắn xóa'">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit" style="border: none;
                        background-color: WHITE; color:#007bff;" ><i class="fas fa-trash"></i></a></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
        {{$quanlyorder->links("pagination::bootstrap-4")}}
</div>



@endsection