<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Models\TheLoaiSach;
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
}
