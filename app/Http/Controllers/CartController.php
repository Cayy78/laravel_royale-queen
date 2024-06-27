<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function showCart()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = auth()->id();
        
        // Mendapatkan item-item keranjang pengguna yang sedang login
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();

        // Menampilkan halaman keranjang dengan data item keranjang
        return view('cart', compact('cartItems'));
    }

    public function addtocart($id)
    {
        // Mencari produk berdasarkan ID
        $product = Product::find($id);

        // Jika produk tidak ditemukan, tampilkan halaman 404
        if (!$product) {
            abort(404);
        }

        // Mencari item keranjang berdasarkan pengguna dan produk
        $cartItem = Cart::where('user_id', auth()->id())
                        ->where('product_id', $id)
                        ->first();

        if ($cartItem) {
            // Jika produk sudah ada di keranjang, tambahkan jumlahnya
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Jika produk belum ada di keranjang, buat item keranjang baru
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }

        // Redirect ke halaman keranjang dengan pesan sukses
        return redirect()->route('cart')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
}
