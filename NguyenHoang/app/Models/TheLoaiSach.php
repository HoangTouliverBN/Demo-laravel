<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoaiSach extends Model
{
    use HasFactory;
    protected $table = 'theloaisach';
    public function sachs()
    {
        return $this->hasMany(Sach::class, 'Id_TheLoai');
    }

}
