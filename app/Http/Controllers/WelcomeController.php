<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model Product

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mengambil semua data produk dari tabel products

        return view('welcome', compact('products'));
    }
}
