<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Models\TheLoaiSach;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function all()
    {
        $VanHoc = Sach::where('Id_TheLoai','1')->paginate(3);
        $TamLy = Sach::where('Id_TheLoai','2')->paginate(3);
        $Khac = Sach::where('Id_TheLoai','3')->paginate(3);
        return view('web.section',compact('VanHoc','TamLy','Khac'));
    }

    public function showDetail(Sach $detail)
    {
        if($detail->SoLuong > 0){
            $TinhTrang = "Còn hàng";
        } else {
            $TinhTrang = "Hết hàng";
        }
        return view('web.ShowDetail',compact('detail','TinhTrang'));
    }

    public function ShowAll($theloai)
    {
        switch ($theloai) {
            case 'vanhoc':
                $TheLoai = 'SÁCH VĂN HỌC';
                $Sachs = Sach::where('Id_TheLoai','1')->paginate(9);
                return view('web.ShowAll',compact('Sachs','TheLoai'));

                case 'tamly':
                    $TheLoai = 'SÁCH TÂM LÝ';
                    $Sachs = Sach::where('Id_TheLoai','2')->paginate(9);
                    return view('web.ShowAll',compact('Sachs','TheLoai'));

                    case 'khac':
                        $TheLoai = 'SÁCH VĂN HỌC';
                        $Sachs = Sach::where('Id_TheLoai','3')->paginate(9);
                        return view('web.ShowAll',compact('Sachs','TheLoai'));
        }
    }



    public function Search(Request $request)
    {

        $request->validate([
            'search'=>'required',
        ]);

        $search = $request->input('search');

        return redirect('home/search/'.$search);
    }
    public function ValueSearch($search)
    {
        $Sachs = Sach::where('TenSach','like','%'.$search.'%')->paginate(9);
        return view('web.Search',compact('search','Sachs'));
    }
}
