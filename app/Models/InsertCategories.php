<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsertCategories extends Model
{
    use HasFactory;

    protected $table = 'insert_categories';
    
    protected $fillable = [
        'categories_title',
    ];
}
