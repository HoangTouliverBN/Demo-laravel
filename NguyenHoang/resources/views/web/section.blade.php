@extends('frontend.layout.main')

@section('content')
<div class="body">
    <div class="bf">
        <h1>SÁCH VĂN HỌC </h1>
        <div>
            <img class="grid" src="./assets/images/grid.png" alt=""><a href="#"><img class="xemthem" src="./assets/images/xemthem.png" alt=""></a>
        </div>
    </div>

    <div class="container">
        <div class="row card-group gtf">
            @foreach ( $VanHoc as $SachVanHoc)
            <div class="col-md-4 card gt">
                <a href="#"><img src="{{Storage::disk('AnhSach')->url($SachVanHoc->AnhSP)}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{$SachVanHoc->TenSach}}</h5>
                    <p class="card-text"><span>{{$SachVanHoc->DonGia}}</span> VNĐ</p>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

<div class="body">
    <div class="bf">
        <h1>SÁCH TÂM LÝ </h1>
        <div>
            <img class="grid" src="./assets/images/grid.png" alt=""><a href="#"><img class="xemthem" src="./assets/images/xemthem.png" alt=""></a>
        </div>
    </div>

    <div class="container">
        <div class="row card-group gtf">
            @foreach ( $TamLy as $SachTamLy)
            <div class="col-md-4 card gt">
                <a href="#"><img src="{{Storage::disk('AnhSach')->url($SachTamLy->AnhSP)}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{$SachTamLy->TenSach}}</h5>
                    <p class="card-text"><span>{{$SachTamLy->DonGia}}</span> VNĐ</p>

                </div>
            </div>
            @endforeach
    </div>
</div>

<div class="body">
    <div class="bf">
        <h1>SÁCH KHÁC </h1>
        <div>
            <img class="grid" src="./assets/images/grid.png" alt=""><a href="#"><img class="xemthem" src="./assets/images/xemthem.png" alt=""></a>
        </div>
    </div>

    <div class="container">
        <div class="row card-group gtf">
            @foreach ( $Khac as $SachKhac)
            <div class="col-md-4 card gt">
                <a href="#"><img src="{{Storage::disk('AnhSach')->url($SachKhac->AnhSP)}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{$SachKhac->TenSach}}</h5>
                    <p class="card-text"><span>{{$SachKhac->DonGia}}</span> VNĐ</p>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="content">
    <p>ĐỌC SÁCH CHO TA KIẾN THỨC VÀ SỰ HIỂU BIẾT…
    </p>
    <div class="imgcontent">
        <img src="./assets/images/Anh7.png" alt="">
    </div>
</div>
@endsection