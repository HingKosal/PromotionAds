<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = ['title', 'description'];
    protected $primaryKey = 'id';
}
