<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'quantity'
    ];

    /**
     * Mendapatkan pengguna yang memiliki keranjang.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mendapatkan produk dalam keranjang.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
