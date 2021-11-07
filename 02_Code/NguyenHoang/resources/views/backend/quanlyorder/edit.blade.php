@extends('frontend.layout.admin')

@section('content')
    <div class="container">
        <h1 class="text-center">Cập nhật order</h1>
        <form action="{{ url('quanlyorder/'.$quanlyorder->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$quanlyorder->name}}">
                <p class="error">                    
                    @error('name')
                    {{$message}}
                    @enderror</p>
            </div>

            <div class="form-group">
                <label for="name">Ghi chú:</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$quanlyorder->description}}</textarea>
            </div>

            </div>
            <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
            <a href="{{url('quanlyorder')}}" class="btn btn-primary">Quay lại</a>
        </form>

    @endsection
