<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppingCart extends Model
{
    use HasFactory;
    protected $table = 'shopping_cart';
    protected $fillable = ['email','user_id','sach_id','so_luong','tong_gia','state'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
