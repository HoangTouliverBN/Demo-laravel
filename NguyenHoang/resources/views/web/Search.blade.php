@extends('web.index')

@section('content')
    <div class="body">
        <div class="bf">
            <h1>Tìm kiếm: {{ $search }}</h1>
        </div>

        <div class="container">

            @if (count($Sachs) == 0)
                <p class="text-center">Không có sản phẩm nào phù hợp với từ khóa được tìm kiếm</p>
            @else <div class="row gtf">
                    @foreach ($Sachs as $Sach)
                        <div class="col-md-4 card gt">
                            <a href="{{ url('home/detail/' . $Sach->STT) }}"><img
                                    src="{{ Storage::disk('AnhSach')->url($Sach->AnhSP) }}" class="card-img-top"
                                    alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $Sach->TenSach }}</h5>
                                <p class="card-text"><span>{{ number_format($Sach->DonGia, 0, '', '.') }}</span> VNĐ
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    {{ $Sachs->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
