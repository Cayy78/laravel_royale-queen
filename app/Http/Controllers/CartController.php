<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function showCart()
    {
        $userId = auth()->id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        return view('cart', compact('cartItems'));
    }
    public function addtocart($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

       
        Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'quantity' => 1,
        ]);

        return redirect()->route('cart')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
}