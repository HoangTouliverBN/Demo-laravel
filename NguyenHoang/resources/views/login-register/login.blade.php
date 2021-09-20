@extends('login-register.index')


@section('content')
<div class="bg-light text-dark login">
    <form action="{{url('login')}}" class="login-form container" method="POST">
        @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>

            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>

            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
            @isset($message)
                <p class="text-danger">{{$message}}</p>
            @endisset
            <div class="text-center ">
                <button type="submit" class="btn-submit btn btn-primary">Đăng nhập</button>
            </div>
    <div class="d-flex justify-content-between">
        <p><a href="{{url('register')}}">Bạn chưa có tài khoản?</a>
            </p>
            <p><a href="{{url('password/forget')}}">Quên mật khẩu?</a></p>
    </div>
    </form>
</div>
@endsection