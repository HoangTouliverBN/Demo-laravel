@extends('frontend.layout.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Thông tin chi tiết</h1>
<div >
    <div>
        <h3>Tên sản phẩm</h3>
        <p>{{$quanlyorder->name}}</p>
    </div>

    <div>
        <h3>Tài khoản đăng ký</h3>
        <p>{{$quanlyorder->email}}</p>
    </div>

    <div>
        <h3>Họ và tên</h3>
        <p>{{$quanlyorder->last_name}} {{$quanlyorder->first_name}}</p>
    </div>

    <div>
        <h3>Số điện thoại</h3>
        <p>{{$quanlyorder->phone_number}}</p>
    </div>

    <div>
        <h3>Địa chỉ</h3>
        <p>{{$quanlyorder->address}}</p>
    </div>

    <div>
        <h3>Tình trạng</h3>
        <p>{{ $quanlyorder->state == null ? 'Chưa hoàn thành' : 'Đã hoàn thành' }}</p>
    </div>

    <div>
        <h3>Link sản phẩm</h3>
        <p>{{$quanlyorder->link != null ? $quanlyorder->link : 'Chưa có' }}</p>
    </div>

    <div>
        <h3>Ghi chú</h3>
        <p>{{$quanlyorder->description}}</p>
    </div>

    <div>
        <h3>Ảnh sản phẩm</h3>
        @if (!empty($quanlyorder->img))
        <p><img src="{{ Storage::disk('ImgOrder')->url($quanlyorder->img) }}" alt=""></p>
            
        @else
        <p>Chưa có</p>
        @endif
        
    </div>


    <a href="{{url('quanlyorder')}}" class="btn btn-primary">Quay lại</a>
</div>    
</div>
@endsection