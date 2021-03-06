<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resetPassword extends Model
{
    use HasFactory;
    protected $table = "reset_password";

    protected $primaryKey = null;

    protected $fillable = ['email','token'];
}
