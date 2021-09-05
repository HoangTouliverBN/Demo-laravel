<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class user_information extends Model
{
    use HasFactory;

    protected $table = 'user_information';

    protected $dates = 'birthday';

    protected $fillable = ['first_name','last_name','phone_number','address','user_id','birthday','avatar'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
