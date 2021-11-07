<header>
    <div class="row navfirst">
        <div class="col-md-6 navl logo-left">
            <h1><a href="{{url('home')}}">NGUYEN HOANG</a></h1>
            <div>
                <p>Hotline: 1800 1000</p>
            </div>
        </div>

        <div class="col-md-6 navr">
            <ul>
                <li>
                    
                        @if(Auth::check())
                        <a class="btn btn-secondary dropdown-toggle active-user" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i><span class="inuser"> {{Auth::user()->name}}</span></a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a href="{{url('user-information')}}" class="dropdown-item DI">Thông tin cá nhân</a>
                            @if (Auth::user()->id_phanquyen==2||Auth::user()->id_phanquyen==3)
                            <a class="dropdown-item DI" href="{{url('quanlysach')}}">Quản lý</a>

                            @endif
                            @if (Auth::user()->id_phanquyen==3)
                            <a class="dropdown-item DI" href="{{url('register-admin')}}">Thêm tài khoản admin</a>
                            @endif
                            <a class="dropdown-item DI" href="{{url('changePassword')}}">Đổi mật khẩu</a>
                            <a class="dropdown-item DI" href="{{url('logout')}}">Đăng xuất</a>
                        </div>
                        @else
                        <a href="{{url('login')}}" class="btn btn-default btn-rounded my-3 user" ><i class="fas fa-user"></i><span class="inuser">Tài khoản</span></a>
                        @endif

                </li>
            </ul>
        </div>
    </div>

    
</header>


