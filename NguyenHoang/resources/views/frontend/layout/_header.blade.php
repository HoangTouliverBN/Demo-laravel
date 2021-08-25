<header>
    <div class="row navfirst">
        <div class="col-md-6 navl">
            <h1><a href="{{url('home')}}">NGUYEN HOANG</a></h1>
            <div>
                <p>Hotline: 1800 1000</p>
            </div>
        </div>

        <div class="col-md-6 navr">
            <ul>
                <li class="search"><input type="text" id="search" name="search" placeholder="Tìm kiếm "><a class="bsearch" href="./timkiem.php"><i class="fas fa-search"></i></a></i></li>
                <li>
                    <a href="#"><i class="fas fa-shopping-cart"></i>Giỏ hàng</a>
                </li>
                <li>
                    
                        @if(Auth::check())
                        <a class="btn btn-secondary dropdown-toggle active-user" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i><span class="inuser"> {{Auth::user()->name}}</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item DI" href="{{url('quanlysach')}}">Sản phẩm</a>
                            <a class="dropdown-item DI" href="">Đơn đăng ký</a>
                            <a class="dropdown-item DI" href="{{url('logout')}}">Đăng xuất</a>
                        </div>
                        @else
                        <a href="{{url('login')}}" class="btn btn-default btn-rounded my-3 user" ><i class="fas fa-user"></i><span class="inuser">Tài khoản</span></a>
                        @endif

                </li>
            </ul>
        </div>
    </div>
    <div class="img1">
        <img src="./assets/images/Untitled-1.png" alt="">
    </div>
    <div class="navsecond">
        <ul>
            <li>
                <a href="#">Trang chủ</a>
            </li>
            <li>
                <a href="#">Giới thiệu</a>
            </li>
            <li>
                <a href="#">Sản phẩm<i class="fas fa-sort-down"></i>
                    
                </a>
            </li>
            <li>
                <a href="#">Tin tức</a>
            </li>
            <li>
                <a href="#">Liên hệ</a>
            </li>
        </ul>
    </div>
 
</header>


