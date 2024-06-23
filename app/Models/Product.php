<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_title',
        'description',
        'product_category',
        'product_brands',
        'product_image1',
        'product_image2',
        'product_image3',
        'product_price',
    ];
}
