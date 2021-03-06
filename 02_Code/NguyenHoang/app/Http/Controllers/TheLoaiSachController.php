<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Models\TheLoaiSach;
use Illuminate\Http\Request;

class TheLoaiSachController extends Controller
{
    public function index(TheLoaiSach $theLoaiSach)
    {
        $theLoaiSach = TheLoaiSach::paginate(10);
        return view('backend.quanlytheloai.index',compact('theLoaiSach'));
    }

    public function create()
    {
        return view('backend.quanlytheloai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'TheLoai'=>['required'],
        ]);

        $check = TheLoaiSach::create($request->input());
        
        return redirect('quanlytheloai')->with('message','Thêm mới thể loại thành công');
    }

    public function edit(TheLoaiSach $quanlytheloai)
    {
        return view('backend.quanlytheloai.edit',compact('quanlytheloai'));
    }
    public function update(TheLoaiSach $quanlytheloai, Request $request)
    {
        $request->validate([
            'TheLoai' => 'required',
        ]);

        $check = $quanlytheloai->update($request->input());
        return redirect('quanlytheloai')->with('message','Cập nhật thể loại thành công');
    }

    public function show(TheLoaiSach $quanlytheloai)
    {
        $id_theloai = $quanlytheloai->TheLoai;
        $SoLuong = Sach::where('TheLoai',$id_theloai)->get()->count();

        return view('backend.quanlytheloai.show',compact('quanlytheloai','SoLuong'));
    }


    public function destroy(TheLoaiSach $quanlytheloai)
    {
        $quanlytheloai->delete();
        return redirect(url('quanlytheloai'))->with('message','Xóa thể loại thành công');
        
    }
}
