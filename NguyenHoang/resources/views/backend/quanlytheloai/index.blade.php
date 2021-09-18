@extends('frontend.layout.admin')

@section('content')
<div class="tab-pane fade show active" id="quanlytheloai" role="tabpanel"
aria-labelledby="v-pills-home-tab">
<div>
    <div >
        <h1 class="text-center">Thể loại sản phẩm</h1>
        <div>
            <a href="{{url('quanlytheloai/create')}}" class="btn btn-success">+ Thêm mới</a>
        </div>
    </div><br>
    
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th scope="col">Thể loại</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($theLoaiSach as $theloai)
                <tr>
                    <td scope="row">{{$theloai->TheLoai}}</td>
                    <td>
                        <a href="{{url('quanlytheloai/'.$theloai->id)}}"><i class="far fa-eye"></i></a>
                        <a href="{{url('quanlytheloai/'.$theloai->id.'/edit')}}"><i class="fas fa-pencil-alt"></i></a>
                        <a href="{{url('quanlytheloai/'.$theloai->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa dữ liệu này?')"></a>
                        <form action="{{url('quanlytheloai/'.$theloai->id)}}" class="d-inline" method="POST" onsubmit="return 'Bạn có chắc chắn xóa'">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit" style="border: none;
                        background-color: WHITE; color:#007bff;" ><i class="fas fa-trash"></i></a></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>    
        {{$theLoaiSach->links("pagination::bootstrap-4")}}
</div>



@endsection