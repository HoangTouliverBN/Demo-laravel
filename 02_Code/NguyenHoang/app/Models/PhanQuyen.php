<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class PhanQuyen extends Model
{
    use HasFactory;

    protected $table = 'phanquyen';
    public function users()
    {
        return $this->hasMany(User::class, 'id_phanquyen');
    }
}
