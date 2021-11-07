@extends('login-register.index')


@section('content')
<div class="bg-light text-dark login">
    <form action="{{url('changePassword')}}" class="login-form container" method="POST">
        @csrf
            <div class="form-group">
                <label for="oldPassword">Mật khẩu cũ:</label>
                <input type="password" id="oldPassword" name="oldPassword" class="form-control">
            </div>

            @error('oldPassword')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label for="Password">Mật khẩu:</label>
                <input type="password" id="Password" name="Password" class="form-control">
            </div>

            @error('Password')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label for="rePassword">Nhập lại mật khẩu:</label>
                <input type="password" id="rePassword" name="rePassword" class="form-control">
            </div>

            @error('rePassword')
            <p class="text-danger">{{$message}}</p>
            @enderror


            <div class="text-center ">
                <button type="submit" class="btn-changePassword btn btn-primary">Đổi mật khẩu</button>
                <a href="{{url('home')}}" class="btn btn-primary btn-changePassword">Quay lại</a>       
            </div>

    </form>
</div>
@endsection