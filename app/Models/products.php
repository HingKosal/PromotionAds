<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['product_name', 'category_id', 'brand_id', 'price', 'discount',
    'description', 'image', 'size_id', 'user_id'];
}
