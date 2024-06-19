<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsertBrands extends Model
{
    use HasFactory;

    protected $table = 'insert_brands';
    
    protected $fillable = [
        'brands_title',
    ];
}
