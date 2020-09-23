<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = [
        'first_name','last_name','username', 'email', 'password','password_confirmation'
    ];
}
