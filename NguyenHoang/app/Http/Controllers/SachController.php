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
        ]);

        Sach::create($request->input());
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
        ]);

        $quanlysach->update($request->input());
        return redirect(url('quanlysach'));
    }

    public function destroy(Sach $quanlysach)
    {
        $quanlysach->delete();
        return redirect(url('quanlysach'));
        
    }
}
