<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;

    protected $table = 'Sach';

    protected $primaryKey = 'STT';

    protected $fillable = ['MS','TenSach','TacGia','NSB','SoLuong','DonGia','TheLoai'];

}
