<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sizes extends Model
{
    protected $fillable = ['size_name', 'description'];
    protected $primaryKey = 'id';
}
