<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'product_name',
        'product_slug',
        'product_description',
        'product_price',
        'product_cost',
        'unit',
        'in_stock',
    ];
}
