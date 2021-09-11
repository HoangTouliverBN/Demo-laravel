@extends('web.index')

@section('content')
<div class="">
    <div class="bg-light show-detail" >
        <div class="row no-gutters">
            <div class="col-md-4 text-right">
                <img src="{{ Storage::disk('AnhSach')->url($detail->AnhSP) }}" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Tên sách: {{ $detail->TenSach }}</h5>
                    <p class="card-text">Thể loại: {{$detail->TheLoai}}</p>
                    <p class="card-text">Mã sách: {{$detail->MS}}</p>
                    <p class="card-text">Tác giả: {{$detail->TacGia}}</p>
                    <p class="card-text">Nhà suất bản: {{$detail->NSB}}</p>
                    <p class="card-text">Giá: {{number_format($detail->DonGia,0,"",".");}}</p>
                    <p class="card-text">Tình trạng: {{$TinhTrang}} </p>
                    <a href="#" class=" btn btn-primary">Thêm vào giỏ hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
