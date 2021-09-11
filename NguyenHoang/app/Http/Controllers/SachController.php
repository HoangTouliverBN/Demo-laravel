<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Models\TheLoaiSach;
use App\Rules\KhongBoTrong;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class SachController extends Controller
{

    public function index()
    {
        
        $ListSach = Sach::paginate(10);
        $active = "active";
        return view('backend.quanlysach.index',compact('ListSach'));
    }

    public function create(TheLoaiSach $ListTheLoai)
    {
        $ListTheLoai = TheLoaiSach::all();
        return view('backend.quanlysach.create',compact('ListTheLoai'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'MS'=>[new KhongBoTrong()],
            'TacGia'=>[new KhongBoTrong()],
            'NSB'=>[new KhongBoTrong()],
            'DonGia'=>[new KhongBoTrong()],
            'SoLuong'=>[new KhongBoTrong()],
            'TheLoai'=>[new KhongBoTrong()],
            'TenSach'=>[new KhongBoTrong()],
            'AnhSP'=>'required|image',
        ]);
        $file = $request->file('AnhSP');
        $fileName = $file->getClientOriginalName();
        $id_theloai = 3;
        $Theloai = '';
        $Theloai = $request->input('TheLoai');

        switch ($Theloai) {
            case 'Văn học':
                $id_theloai = 1;
                break;
            
            case 'Tâm lý':
                $id_theloai = 2;
                break;
            
            default:
                $id_theloai = 3;
                break;
        }


        $check =  Sach::create(array_merge($request->input(),[
            'AnhSP'=>$fileName,
            'Id_TheLoai'=>$id_theloai,
        ]));
        if($check){
            $file->storeAS('',$fileName,'AnhSach');
        }

        return redirect('quanlysach');
    }

    public function show(Sach $quanlysach)
    {
        return view('backend.quanlysach.show',compact('quanlysach'));
    }

    public function edit(Sach $quanlysach)
    {
        $ListTheLoai = TheLoaiSach::all();
        return view('backend.quanlysach.edit',compact('quanlysach','ListTheLoai'));
    }

    public function update(Sach $quanlysach,Request $request)
    {
        $request->validate([
            'MS'=>[new KhongBoTrong()],
            'TacGia'=>[new KhongBoTrong()],
            'NSB'=>[new KhongBoTrong()],
            'DonGia'=>[new KhongBoTrong()],
            'SoLuong'=>[new KhongBoTrong()],
            'TheLoai'=>[new KhongBoTrong()],
            'TenSach'=>[new KhongBoTrong()],
            'AnhSP'=>'image',

        ]);
        $fileCheck = $request->hasFile('AnhSP');
        if($fileCheck){
            $file = $request->file('AnhSP');
            $fileName = $file->getClientOriginalName();
        } else{
            $fileName = $quanlysach->AnhSP;
        }
        
        $id_theloai = 3;
        $Theloai = '';
        $Theloai = $request->input('TheLoai');

        switch ($Theloai) {
            case 'Văn học':
                $id_theloai = 1;
                break;
            
            case 'Tâm lý':
                $id_theloai = 2;
                break;
            
            default:
                $id_theloai = 3;
                break;
        }

        $check = $quanlysach->update(array_merge($request->input(),[
            'AnhSP' => $fileName,
            'Id_TheLoai'=>$id_theloai,
        ]));
        if($check && $fileCheck){
            $file->storeAS('',$fileName,'AnhSach');
        }
        return redirect(url('quanlysach'));
    }

    public function destroy(Sach $quanlysach)
    {
        $quanlysach->delete();
        return redirect(url('quanlysach'));
        
    }
}
