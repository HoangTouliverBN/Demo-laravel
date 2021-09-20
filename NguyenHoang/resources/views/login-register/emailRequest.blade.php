@extends('login-register.index')


@section('content')
<div class="bg-light text-dark login">
    <form action="{{url('password/forget')}}" class="login-form container" method="POST">
        @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>

            @error('email')
                <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="text-center ">
                <button type="submit" class="btn-submit btn btn-primary btn-request">Gửi xác nhận</button>
            </div>

    <a href="{{url('login')}}">Đăng nhập?</a>       
    </form>
</div>
@endsection