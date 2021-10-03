@extends('frontend.layout.admin')

@section('content')
    <div class="tab-pane fade show active" id="quanlyorder" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div>
            <div>
                <h1 class="text-center">Đơn đăng ký mua hàng</h1>
            </div><br>

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col-6">Email</th>

                        <th scope="col">Số tiền thanh toán</th>

                        <th scope="col">Ngày thanh toán</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($quanlydoanhthu as $financial)
                        <tr>
                            <td scope="row">{{ $financial->email}}</td>
                            <td scope="row">{{number_format($financial->money,0,"",".");}}</td>
                            <td scope="row">{{$financial->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $quanlydoanhthu->links('pagination::bootstrap-4') }}
        </div>



    @endsection
