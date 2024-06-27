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

        // Hitung total harga
        $total = $cartItems->sum(function ($item) {
        return $item->product->product_price * $item->quantity;
        });

        return view('cart', compact('cartItems', 'total'));
    }


    public function addtocart($id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404);
        }

        $userId = auth()->id();
        $cartItem = Cart::where('user_id', $userId)->where('product_id', $product->id)->first();

        if ($cartItem) {
            // Jika produk sudah ada di keranjang, tambahkan quantity-nya
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            // Jika produk belum ada di keranjang, buat entri baru
            Cart::create([
                'user_id' => $userId,
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('cart')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function removeFromCart($id)
    {
        $userId = auth()->id();
        $cartItem = Cart::where('user_id', $userId)->where('product_id', $id)->first();

        if ($cartItem) {
            if ($cartItem->quantity > 1) {
                $cartItem->quantity -= 1;
                $cartItem->save();
            } else {
                $cartItem->delete();
            }
        }

        return redirect()->route('cart')->with('success', 'Produk berhasil dikurangi dari keranjang.');
    }

    public function clearCart()
    {      
        $userId = auth()->id();
        Cart::where('user_id', $userId)->delete();

        return redirect()->route('cart')->with('success', 'Keranjang berhasil dikosongkan.');
    }
}
