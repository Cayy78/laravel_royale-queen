<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Import model Product
use App\Models\InsertCategories;
use App\Models\InsertBrands;
use App\Http\Requests\Insert_Brands;
use App\Http\Requests\Insert_Categories;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mengambil semua data produk dari tabel products
        $categories = InsertCategories::all();
        $brands = InsertBrands::all();
        return view('welcome', compact('products','categories','brands'));
    }
}
