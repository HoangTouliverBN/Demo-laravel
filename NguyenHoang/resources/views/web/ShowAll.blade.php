@extends('web.index')

@section('content')
<div class="body">
    <div class="bf">
        <h1>{{$TheLoai}} </h1>
    </div>

    <div class="container">
        <div class="row card-group gtf">
            @foreach ( $Sachs as $Sach)
            <div class="col-md-4 card gt">
                <a href="{{url('home/detail/'.$Sach->STT)}}"><img src="{{Storage::disk('AnhSach')->url($Sach->AnhSP)}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">{{$Sach->TenSach}}</h5>
                    <p class="card-text"><span>{{$Sach->DonGia}}</span> VNĐ</p>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
