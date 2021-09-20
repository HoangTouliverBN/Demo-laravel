@extends('login-register.index')


@section('content')
<div class="bg-light text-dark login">
    <form action="{{url('password/reset')}}" class="login-form container" method="POST">
        @csrf
            <div class="form-group">
                <label for="password">Mật khẩu mới:</label>
                <input type="text" id="password" name="password" class="form-control">
            @error('password')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>

            <div class="form-group">
                <label for="confirm-password">Nhập lại mật khẩu:</label>
                <input type="text" id="confirm-password" name="confirm-password" class="form-control">
            @error('confirm-password')
                <p class="text-danger">{{$message}}</p>
            @enderror
            </div>



            <div class="text-center ">
                <button type="submit" class="btn-submit btn btn-primary btn-request">Đặt lại mật khẩu</button>
            </div>

    <a href="{{url('login')}}">Đăng nhập?</a>           
    </form>
</div>
@endsection