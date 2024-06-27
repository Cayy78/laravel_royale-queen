<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\InsertCategories;
use App\Models\InsertBrands;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Cari produk berdasarkan nama
        $products = Product::where('product_title', 'LIKE', "%{$query}%")->get();

        // Dapatkan semua kategori dan merek untuk ditampilkan
        $categories = InsertCategories::all();
        $brands = InsertBrands::all();

        return view('welcome', compact('products', 'categories', 'brands'));
    }

    public function showProductDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('product_detail', compact('product'));
    }
}
