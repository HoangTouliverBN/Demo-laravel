@extends('frontend.layout.admin')

@section('content')
    <div class="container">
        <h1 class="text-center">Thêm mới thể loại sách</h1>
        <form action="{{ url('quanlytheloai/'.$quanlytheloai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="TheLoai">Thể loại sách:</label>
                <input type="text" name="TheLoai" class="form-control" id="TheLoai" value="{{$quanlytheloai->TheLoai}}">
                <p class="error">                    @error('TheLoai')
                    {{$message}}
                    @enderror</p>
            </div>

            </div>
            <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
            <a href="{{url('quanlytheloai')}}" class="btn btn-primary">Quay lại</a>
        </form>

    @endsection
