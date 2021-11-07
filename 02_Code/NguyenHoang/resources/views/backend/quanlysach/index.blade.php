@extends('frontend.layout.admin')

@section('content')
    <div class="tab-pane fade show active" id="quanlysach" role="tabpanel" aria-labelledby="v-pills-home-tab">

        <div>
            <div>
                <h1 class="text-center">Danh sách sản phẩm</h1>
                <div>
                    <a href="{{ url('quanlysach/create') }}" class="btn btn-success">+ Thêm mới</a>
                </div>
            </div><br>

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sách</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ListSach as $Sach)
                        <tr>
                            <td scope="row">{{ $Sach->STT }}</td>
                            <td scope="row">{{ $Sach->TenSach }}</td>
                            <td scope="row">{{ $Sach->TacGia }}</td>
                            <td scope="row">{{ $Sach->TheLoai }}</td>
                            <td scope="row">{{ number_format($Sach->DonGia, 0, '', '.') }}</td>
                            <td>
                                <a href="{{ url('quanlysach/' . $Sach->STT) }}"><i class="far fa-eye"></i></a>
                                <a href="{{ url('quanlysach/' . $Sach->STT . '/edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                <form action="{{ url('quanlysach/' . $Sach->STT) }}" class="d-inline" method="POST"
                                    onsubmit="return confirm('Bạn có chắc chắn xóa')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" style="border: none;
                            background-color: WHITE; color:#007bff;"><i class="fas fa-trash"></i></a></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $ListSach->links('pagination::bootstrap-4') }}
        </div>

    </div>

@endsection
