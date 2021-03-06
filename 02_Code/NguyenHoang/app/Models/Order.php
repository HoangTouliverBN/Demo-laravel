<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";

    protected $fillable = ['name','user_id','state','link','img','description'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
