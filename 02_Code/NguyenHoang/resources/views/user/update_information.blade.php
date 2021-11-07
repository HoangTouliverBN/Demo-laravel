@extends('web.index')

@section('content')
    <div class="container">
        <h1 class="text-center">Cập nhật thông tin cá nhân</h1>
        <form action="update-information" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">Tên</label>
                <input type="text" name="first_name" id="first_name" class="form-control"
                    value="{{ $value->first_name ?? '' }}">
            </div>

            <div class="form-group">
                <label for="last_name">Họ</label>
                <input type="text" name="last_name" id="last_name" class="form-control"
                    value="{{ $value->last_name ?? '' }}">
            </div>

            <div class="form-group">
                <label for="birthday">Ngày sinh</label>
                <input type="date" name="birthday" id="birthday" class="form-control" value="{{ $value->birthday ?? '' }}">
            </div>

            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $value->address ?? '' }}">
            </div>

            <div class="form-group">
                <label for="phone_number">Số điện thoại</label>
                <input type="number" name="phone_number" id="phone_number" class="form-control"
                    value="{{ $value->phone_number ?? '' }}">
            </div>

            <div class="form-group">
                <label for="inputGroupFile01">Ảnh đại diện</label>
                <input type="file" name="avatar" class="form-control">
            </div>

            <button class="btn btn-primary" type="submit">Cập nhật thông tin</button>
            <a href="{{ url('user-information') }}" class="btn btn-primary">Quay lại</a>
        </form>
        @isset($value->avatar)
        <img src="{{ Storage::disk('Avatar')->url($value->avatar) }}" alt="">
            
        @endisset
    </div>
@endsection
