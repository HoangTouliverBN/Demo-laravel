@extends('frontend.layout.main')

@section('content')
<div class="body">
    <div class="bf">
        <h1>SÁCH VĂN HỌC </h1>
        <div>
            <img class="grid" src="./assets/images/grid.png" alt=""><a href="#"><img class="xemthem" src="./assets/images/xemthem.png" alt=""></a>
        </div>
    </div>

    <div class="container">
        <div class="row card-group gtf">
            <div class="col-md-3 card gt">
                <a href="#"><img src="./assets/images/img1.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Nhà giả kim</h5>
                    <p class="card-text"><span>50.000</span> VNĐ</p>

                </div>
            </div>
            <div class="col-md-3 card gt">
                <a href="#"><img src="./assets/images/img2.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Cây cam ngọt của tôi</h5>
                    <p class="card-text"><span>60.000</span> VNĐ</p>

                </div>
            </div>
            <div class="col-md-3 card gt">
                <a href="#"><img src="./assets/images/img3.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Yêu những điều không hoàn hảo
                    </h5>
                    <p class="card-text"><span>55.000</span> VNĐ</p>

                </div>
            </div>
            <div class="col-md-3 card gt">
                <a href="#"><img src="./assets/images/img4.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Hai số phận
                    </h5>
                    <p class="card-text"><span>70.000</span> VNĐ</p>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="body">
    <div class="bf">
        <h1>SÁCH TÂM LÝ </h1>
        <div>
            <img class="grid" src="./assets/images/grid.png" alt=""><a href="#"><img class="xemthem" src="./assets/images/xemthem.png" alt=""></a>
        </div>
    </div>

    <div class="container">
        <div class="row card-group gtf">
            <div class="col-md-4 card gt">
                <a href="#"><img src="./assets/images/Anh1.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Tâm lý học nói gì về hạnh phúc</h5>
                    <p class="card-text"><span>54.000</span> VNĐ</p>

                </div>
            </div>
            <div class="col-md-4 card gt">
                <a href="#"><img src="./assets/images/Anh2.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Hiểu biết về tâm lý học</h5>
                    <p class="card-text"><span>256.000</span> VNĐ</p>

                </div>
            </div>
            <div class="col-md-4 card gt">
                <a href="#"><img src="./assets/images/Anh3.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Tâm lý học hành vi</h5>
                    <p class="card-text"><span>65.000</span> VNĐ</p>

                </div>
            </div>
        </div>

    </div>
</div>

<div class="body">
    <div class="bf">
        <h1>SÁCH KHÁC </h1>
        <div>
            <img class="grid" src="./assets/images/grid.png" alt=""><a href="#"><img class="xemthem" src="./assets/images/xemthem.png" alt=""></a>
        </div>
    </div>

    <div class="container">
        <div class="row card-group gtf">
            <div class="col-md-4 card gt">
                <a href="#"><img src="./assets/images/Anh4.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Tô bình yên vẽ hạnh phúc</h5>
                    <p class="card-text"><span>54.000</span> VNĐ</p>

                </div>
            </div>
            <div class="col-md-4 card gt">
                <a href="#"> <img src="./assets/images/Anh5.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Rich habits: Thói quen thành công</h5>
                    <p class="card-text"><span>227.000</span> VNĐ</p>

                </div>
            </div>
            <div class="col-md-4 card gt">
                <a href="#"><img src="./assets/images/Anh6.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">Đắc nhân tâm</h5>
                    <p class="card-text"><span>73.000</span> VNĐ</p>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <p>ĐỌC SÁCH CHO TA KIẾN THỨC VÀ SỰ HIỂU BIẾT…
    </p>
    <div class="imgcontent">
        <img src="./assets/images/Anh7.png" alt="">
    </div>
</div>
@endsection
