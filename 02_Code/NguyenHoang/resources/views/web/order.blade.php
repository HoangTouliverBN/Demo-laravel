@extends('web.index')

@section('content')
    <div class="body-order">
        <div class="container d-flex justify-content-center">
            <form action="{{ url('order') }}" method="POST" class="form-order" enctype="multipart/form-data">
                <h1 class="text-center">Đăng ký mua hàng</h1>
                @csrf
                <div class="form-group">
                    <label for="">
                        Tên sản phẩm
                    </label>
                    <input type="text" name="name" class="form-control">
                    <p class="error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="form-group">
                    <label for="">
                        Link sản phẩm(nếu có)
                    </label>
                    <input type="text" name="link" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">
                        Hình ảnh sản phẩm(nếu có)
                    </label>
                    <input type="file" name="img" class="form-control">
                    <p class="error">
                        @error('img')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="form-group">
                    <label for="">
                        Mô tả sản phẩm
                    </label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    <p class="error">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div style="text-align: cente">
                    <button type="submit" class="btn btn-primary">Đăng ký mua sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
