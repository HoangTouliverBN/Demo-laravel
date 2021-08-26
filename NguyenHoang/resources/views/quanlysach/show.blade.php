@extends('frontend.layout.admin')

@section('content')

<div class="container">
    <h1 class="text-center">Thông tin chi tiết</h1>
<div >
    <div>
        <h3>STT</h3>
        <p>{{$quanlysach->STT}}</p>
    </div>
    
    <div>
        <h3>Mã sách</h3>
        <p>{{$quanlysach->MS}}</p>
    </div>

    <div>
        <h3>Tên sách</h3>
        <p>{{$quanlysach->TenSach}}</p>
    </div>

    <div>
        <h3>Tác giả</h3>
        <p>{{$quanlysach->TacGia}}</p>
    </div>

    <div>
        <h3>Nhà xuất bản</h3>
        <p>{{$quanlysach->NSB}}</p>
    </div>

    <div>
        <h3>Thể loại</h3>
        <p>{{$quanlysach->TheLoai}}</p>
    </div>

    <div>
        <h3>Đơn giá</h3>
        <p>{{$quanlysach->DonGia}}</p>
    </div>

    <div>
        <h3>Số lượng</h3>
        <p>{{$quanlysach->SoLuong}}</p>
    </div>


    <div>
        <h3>Ngày khởi tạo</h3>
        <p>{{$quanlysach->created_at}}</p>
    </div>

    <div>
        <h3>Lần cập nhật gần nhất</h3>
        <p>{{$quanlysach->updated_at}}</p>
    </div>

    <div>
        <h3>Ảnh sản phẩm</h3>
        <img src="{{ Storage::disk('AnhSach')->url($quanlysach->AnhSP) }}" alt="">
    </div><br>

    <a href="{{url('quanlysach')}}" class="btn btn-primary">Back</a>
</div>    
</div>
@endsection