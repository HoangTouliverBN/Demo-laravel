@extends('frontend.layout.admin')

@section('content')
<div class="container">
    <form action="{{url('quanlysach/'.$quanlysach->STT)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="MS">Mã sách:</label>
            <input type="text" name="MS" class="form-control" id="MS" value="{{$quanlysach->MS}}">
            <p class="error">@error('MS')
                {{$message}}
                @enderror</p>
        </div>

        <div class="form-group">
            <label for="TenSach">Tên sách:</label>
            <input type="text" name="TenSach" class="form-control" id="TenSach" value="{{$quanlysach->TenSach}}">
            <p class="error">@error('TenSach')
                {{$message}}
                @enderror</p>

        </div>

        <div class="form-group">
            <label for="TacGia">Tác giả:</label>
            <input type="text" name="TacGia" class="form-control" id="TacGia" value="{{$quanlysach->TacGia}}">
            <p class="error">@error('TacGia')
                {{$message}}
                @enderror</p>

        </div>

        <div class="form-group">
            <label for="NSB">Nhà xuất bản:</label>
            <input type="text" name="NSB" class="form-control" id="NSB" value="{{$quanlysach->NSB}}">
            <p class="error">@error('NSB')
                {{$message}}
                @enderror</p>

        </div>

        <div class="form-group">
            <label for="TheLoai">Thể loại:</label>
            <select name="TheLoai" id="TheLoai" class="form-control">
                <option value="{{$quanlysach->TheLoai}}">{{$quanlysach->TheLoai}}</option>
                <option value="Văn học">Văn học</option>
                <option value="Tâm lý">Tâm lý</option>
                <option value="khác">Khác</option>
            </select>

            <p class="error">
                @error('TheLoai')
                {{$message}}
            @enderror
            </p>

        </div>

        <div class="form-group">
            <label for="DonGia">Đơn giá</label>
            <input type="number" name="DonGia" class="form-control" id="DonGia" value="{{$quanlysach->DonGia}}">
            <p class="error"@error('DonGia')
            {{$message}}
            @enderror></p>

        </div>

        <div class="form-group">
            <label for="SoLuong">Số lượng</label>
            <input type="number" name="SoLuong" class="form-control" id="SoLuong" value="{{$quanlysach->SoLuong}}">
            <p class="error">@error('SoLuong')
                {{$message}}
                @enderror</p>
        </div>

        <div class="form-group">
            <label for="AnhSP">Ảnh sản phẩm</label>
            <input type="file" name="AnhSP" class="form-control" id="AnhSP" value="{{$quanlysach->AnhSP}}">
            <p class="error">
                @error('AnhSP')
                {{$message}}
            @enderror
            </p>
            <div>
                <img src="{{ Storage::disk('AnhSach')->url($quanlysach->AnhSP) }}" alt="">
            </div>
        </div>


        <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{url('quanlysach')}}" class="btn btn-primary">Quay lại</a>
    </form>

@endsection