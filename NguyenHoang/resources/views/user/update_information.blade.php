@extends('web.index')

@section('content')
    <div class="container">
        <form action="user-information" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="first_name">Tên</label>
                <input type="text" name="first_name" id="first_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="last_name">Họ</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
            </div>

            <div class="form-group">
                <label for="birthday">Ngày sinh</label>
                <input type="date" name="birthday" id="birthday" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>

            <div class="form-group">
                <label for="phone_number">Số điện thoại</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control">
            </div>

            <div class="form-group">
                <label for="avatar">Ảnh đại diện</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="avatar"
                        aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Chọn ảnh đại diện</label>
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Cập nhật thông tin</button>
            <a href="{{ url('') }}" class="btn btn-primary">Quay lại</a>
        </form>

    </div>
@endsection
