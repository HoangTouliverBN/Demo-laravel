<header>
    <div class="row navfirst">
        <div class="col-md-6 navl">
            <h1><a href="#">NGUYEN HOANG</a></h1>
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
                    <a href="" class="btn btn-default btn-rounded my-3 user" data-toggle="modal" data-target="#modalLRForm"><i class="fas fa-user"></i><span class="inuser"></span></a>
                    <div class="active-user">

                        <a class="btn btn-secondary dropdown-toggle active-user" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <i class="fas fa-user"></i><span class="inuser"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item DI" href="{{url('quanlysach')}}">Sản phẩm</a>
                            <a class="dropdown-item DI" href="./Quanly/CRUD_dangky/">Đơn đăng ký</a>

                        </div>

                    </div>
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
     <!--Modal: Login / Register Form-->
 <div class="modal fade modalNone " id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                            Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                            Đăng ký</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel" method="POST">
                        <form action="" method="POST" id="LoginForm">
                            <!--Body-->
                            @csrf
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-user mr-1"></i>
                                    <input type="text" id="modalLRInput10" class="form-control form-control-sm validate" name="user">
                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Email:</label>
                                    <p class="error4"></p>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="password">
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Mật
                                        khẩu:</label>
                                    <p class="error5"></p>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-info dangnhap" type="submit" name="LoginSubmit">Đăng nhập <i class="fas fa-sign-in ml-1"></i></button>
                                </div>
                                <div class="text-center mt-2">
                                    <button class="btn btn-info"><i class="fab fa-facebook-f"></i> Đăng nhập bằng
                                        facebook <i class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <p><a class="quenmk" href="">Quên mật khẩu?</a></p>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" id="end" data-dismiss="modal">Kết thúc</button>
                            </div>
                        </form>
                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <form action="" method="POST" id="RegisterForm">
                            <!--Body-->
                            @csrf
                            <div class="modal-body">
                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-user mr-1"></i>
                                    <input type="text" id="modalLRInput12" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Email:</label>
                                    <p class="error1"></p>
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">Mật
                                        khẩu:</label>
                                    <p class="error2"></p>
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Nhập lại mật
                                        khẩu:</label>
                                    <p class="error3"></p>
                                </div>

                                <div class="text-center form-sm mt-2">
                                    <button type="submit" name="RegisterSubmit" class="btn btn-info bdangky">Đăng ký<i class="fas fa-sign-in ml-1"></i></button>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text dangky2">
                                    <p class="pt-1">Bằng việc đăng ký, bạn đã đồng ý với NGUYENHOANG.com về <a href="">Điều
                                            khoản dịch vụ</a> & <a href="">Chính sách bảo mật</a>
                                    </p>
                                </div>
                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Kết thúc</button>
                            </div>
                        </form>

                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->

</header>


