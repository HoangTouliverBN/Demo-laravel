@extends('frontend.layout.admin')

@section('content')
<div class="container">
    <form action="{{url('quanlysach/'.$quanlysach->STT)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="MS">Mã sách:</label>
            <input type="text" name="MS" class="form-control" id="MS" value="{{$quanlysach->MS}}">
            <p class="error"></p>
        </div>

        <div class="form-group">
            <label for="TenSach">Tên sách:</label>
            <input type="text" name="TenSach" class="form-control" id="TenSach" value="{{$quanlysach->TenSach}}">
            <p class="error"></p>

        </div>

        <div class="form-group">
            <label for="TacGia">Tác giả:</label>
            <input type="text" name="TacGia" class="form-control" id="TacGia" value="{{$quanlysach->TacGia}}">
            <p class="error"></p>

        </div>

        <div class="form-group">
            <label for="NSB">Nhà xuất bản:</label>
            <input type="text" name="NSB" class="form-control" id="NSB" value="{{$quanlysach->NSB}}">
            <p class="error"></p>

        </div>

        <div class="form-group">
            <label for="TheLoai">Thể loại:</label>
            <input type="text" name="TheLoai" class="form-control" id="TheLoai" value="{{$quanlysach->TheLoai}}">

            <p class="error"></p>

        </div>

        <div class="form-group">
            <label for="DonGia">Đơn giá</label>
            <input type="text" name="DonGia" class="form-control" id="DonGia" value="{{$quanlysach->DonGia}}">
            <p class="error"></p>

        </div>

        <div class="form-group">
            <label for="SoLuong">Số lượng</label>
            <input type="text" name="SoLuong" class="form-control" id="SoLuong" value="{{$quanlysach->SoLuong}}">
            <p class="error"></p>

        </div>

        <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
    </form>

@endsection