<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class user_information extends Model
{
    use HasFactory;

    protected $table = 'user_information';

    // protected $dates = 'birthday';

    protected $primaryKey = null;

    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
