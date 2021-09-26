@extends('frontend.layout.admin')

@section('content')
    <div class="tab-pane fade show active" id="quanlyuser" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div>
            <div>
                <h1 class="text-center">Danh sách người dùng</h1>
            </div><br>

            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">Tài khoản</th>
                        <th scope="col">Tên hiển thị</th>
                        <th scope="col">Phân loại</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quanlyuser as $user)
                        <tr>
                            <td scope="row">{{ $user->email }}</td>
                            <td scope="row">{{ $user->name }}</td>
                            @if ($user->id_phanquyen == 3)
                                <td scope="row">Master</td>

                            @else
                                <td scope="row">{{ $user->id_phanquyen == 1 ? 'Khách hàng' : 'Admin' }}</td>
                            @endif
                            <td>
                                <a href="{{ url('quanlyuser/' . $user->id) }}"><i class="far fa-eye"></i></a>
                                @if ($user->id_phanquyen != 3)
                                    <a href="{{ url('quanlyuser/' . $user->id) }}"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa dữ liệu này?')"></a>
                                    <form action="{{ url('quanlyuser/' . $user->id) }}" class="d-inline"
                                        method="POST" onsubmit="return confirm('Bạn có chắc chắn xóa')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" style="border: none;
                              background-color: WHITE; color:#007bff;"><i class="fas fa-trash"></i></a></button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $quanlyuser->links('pagination::bootstrap-4') }}
        </div>



    @endsection
