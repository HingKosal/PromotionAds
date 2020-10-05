<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    //
    protected $fillable = [
        'company_name','location','phone', 'description', 'user_id'
    ];
}
