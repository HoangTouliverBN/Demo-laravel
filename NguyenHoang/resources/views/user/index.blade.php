@extends('web.index')

@section('content')
<div class="">
    <div class="bg-light show-detail" >
        <div class="row no-gutters">
            <div class="col-md-4 text-right">
                @if (!empty($value->avatar))
                <img src="{{ Storage::disk('Avatar')->url($value->avatar) }}" alt="">
                    
                @else
                <img class="w-50" src="{{asset('assets/images/avatar.png')}}" alt="">
                @endif
                
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Họ và tên: {{$value->last_name ?? ''}} {{$value->first_name ?? ''}}</h5>
                    <p class="card-title">Ngày sinh: @isset($value->birthday)
                        {{date('d/m/Y', strtotime($value->birthday)) ?? ''}}
                    @endisset</p>
                    <p class="card-title">Số điện thoại: {{$value->phone_number ?? ''}}</p>
                    <p class="card-title">Địa chỉ: {{$value->address ?? ''}}</p>
                    <a href="{{url('update-information')}}" class=" btn btn-primary">Cập nhật thông tin cá nhân</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection