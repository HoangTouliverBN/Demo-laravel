<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class user_information extends Model
{
    use HasFactory;

    protected $table = 'user_informartion';

    protected $dates = 'birthday';

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
