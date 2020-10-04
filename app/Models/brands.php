<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    protected $fillable = ['brand_name', 'description'];
    protected $primaryKey = 'id';
}
