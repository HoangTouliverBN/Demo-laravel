@extends('frontend.layout.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Thông tin chi tiết</h1>
<div >
    <div>
        <h3>Tài khoản:</h3>
        <p>{{$quanlyuser->email}}</p>
    </div>

    <div>
        <h3>Họ và tên:</h3>
        <p>{{$quanlyuser->last_name}} {{$quanlyuser->first_name}}</p>
    </div>

    <div>
        <h3>Ngày sinh:</h3>
        <p>{{$quanlyuser->birthday}}</p>
    </div>

    <div>
        <h3>Số điện thoại:</h3>
        <p>{{$quanlyuser->phone_number}}</p>
    </div>

    <div>
        <h3>Địa chỉ:</h3>
        <p>{{$quanlyuser->address}}</p>
    </div>


    <a href="{{url('quanlyuser')}}" class="btn btn-primary">Quay lại</a>
</div>    
</div>
@endsection