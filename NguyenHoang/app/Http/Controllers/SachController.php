<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Rules\KhongBoTrong;
use Illuminate\Http\Request;


class SachController extends Controller
{

    public function index()
    {
        
        $ListSach = Sach::all();
        return view('quanlysach.index',compact('ListSach'));
    }

    public function create()
    {
        return view('quanlysach.create');
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



        $check =  Sach::create(array_merge($request->input(),[
            'AnhSP'=>$fileName,
        ]));
        if($check){
            $file->storeAS('',$fileName,'AnhSach');
        }

        return redirect('quanlysach');
    }

    public function show(Sach $quanlysach)
    {
        return view('quanlysach.show',compact('quanlysach'));
    }

    public function edit(Sach $quanlysach)
    {
        return view('quanlysach.edit',compact('quanlysach'));
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
        


        $check = $quanlysach->update(array_merge($request->input(),[
            'AnhSP' => $fileName,
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
