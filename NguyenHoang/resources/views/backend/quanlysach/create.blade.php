@extends('frontend.layout.admin')

@section('content')
    <div class="container">
        <h1 class="text-center">Thêm mới sản phẩm</h1>
        <form action="{{ url('quanlysach') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="MS">Mã sách:</label>
                <input type="text" name="MS" class="form-control" id="MS">
                <p class="error">                    @error('MS')
                    {{$message}}
                    @enderror</p>
            </div>



            <div class="form-group">
                <label for="TenSach">Tên sách:</label>
                <input type="text" name="TenSach" class="form-control" id="TenSach">
                <p class="error">                    @error('TenSach')
                    {{$message}}
                    @enderror</p>

            </div>


            <div class="form-group">
                <label for="TacGia">Tác giả:</label>
                <input type="text" name="TacGia" class="form-control" id="TacGia">
                <p class="error">
                    @error('TacGia')
                        {{$message}}
                    @enderror
                </p>
            </div>

            <div class="form-group">
                <label for="NSB">Nhà xuất bản:</label>
                <input type="text" name="NSB" class="form-control" id="NSB">
                <p class="error">
                    @error('NSB')
                    {{$message}}
                @enderror
                </p>

            </div>


            <div class="form-group">
                <label for="TheLoai">Thể loại:</label>
                <select name="TheLoai" id="TheLoai" class="form-control">
                    <option value="">Lựa chọn thể loại</option>
                    @foreach ($ListTheLoai as $theloai )
                    <option value="{{$theloai->TheLoai}}">{{$theloai->TheLoai}}</option>
                    @endforeach


                </select>

                <p class="error">
                    @error('TheLoai')
                    {{$message}}
                @enderror
                </p>

            </div>

            <div class="form-group">
                <label for="DonGia">Đơn giá</label>
                <input type="number" name="DonGia" class="form-control" id="DonGia">
                <p class="error">
                    @error('DonGia')
                    {{$message}}
                @enderror
                </p>

            </div>

            <div class="form-group">
                <label for="SoLuong">Số lượng</label>
                <input type="number" name="SoLuong" class="form-control" id="SoLuong">
                <p class="error">
                    @error('SoLuong')
                    {{$message}}
                @enderror
                </p>
            </div>

            <div class="form-group">
                <label for="AnhSP">Ảnh sản phẩm</label>
                <input type="file" name="AnhSP" class="form-control" id="AnhSP">
                <p class="error">
                    @error('AnhSP')
                    {{$message}}
                @enderror
                </p>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
            <a href="{{url('quanlysach')}}" class="btn btn-primary">Quay lại</a>
        </form>

    @endsection
