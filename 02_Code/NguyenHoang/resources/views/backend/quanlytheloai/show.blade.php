@extends('frontend.layout.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Thông tin chi tiết</h1>
<div >
    <div>
        <h3>Thể Loại</h3>
        <p>{{$quanlytheloai->TheLoai}}</p>
    </div>

    <div>
        <h3>Số lượng sách thuộc thể loại</h3>
        <p>{{$SoLuong}}</p>
    </div>



    <a href="{{url('quanlytheloai')}}" class="btn btn-primary">Quay lại</a>
</div>    
</div>
@endsection