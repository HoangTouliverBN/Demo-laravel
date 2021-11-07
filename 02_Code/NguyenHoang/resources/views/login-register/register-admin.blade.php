@extends('login-register.index')


@section('content')
<div class="bg-light text-dark login">
    <h1 class="text-center">Tạo tài khoản Admin</h1>
    <form action="{{url('register-admin')}}" class="login-form container" method="POST">
        @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>

            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>

            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>

            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror


            <div class="text-center ">
                <button type="submit" class="btn-submit btn btn-primary">Đăng ký</button>
            </div>

    </form>
</div>
@endsection