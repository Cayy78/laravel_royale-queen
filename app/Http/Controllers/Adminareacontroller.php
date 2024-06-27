<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Insert_Categories;
use App\Models\InsertCategories;
use App\Http\Requests\Insert_Brands;
use App\Models\InsertBrands;
use App\Models\Product;

class AdminAreaController extends Controller
{
    public function insertBrand(Insert_Brands $request)
    {
        $input = $request->validated();
        InsertBrands::create($input);
        return redirect('/admin?view=brands')->with('success', 'Brands added successfully.');
    }

    public function insertCategory(Insert_Categories $request)
    {
        $input = $request->validated();
        InsertCategories::create($input);
        return redirect('/admin?view=categories')->with('success', 'Category added successfully.');
    }

    public function view(Request $request)
    {
        $view = $request->get('view');
        
        if ($view == 'view_categories') {
            $categories = InsertCategories::all();
            return view('admin_area.index', compact('categories'));
        } elseif ($view == 'view_brands') {
            $brands = InsertBrands::all();
            return view('admin_area.index', compact('brands'));
        } elseif ($view == 'view_products') {
            $products = Product::all();
            return view('admin_area.view_products', compact('products'));
        }

        // Jika tidak ada parameter view yang cocok, tetap di halaman admin
        return view('admin_area.index');
    }

    public function showInsertProductForm()
    {
        return view('admin_area.insert_product');
    }

    public function insertProduct(Request $request)
    {
        // Validasi permintaan yang masuk
        $request->validate([
            'product_title' => 'required|string',
            'description' => 'required|string',
            'product_category' => 'required|string',
            'product_brands' => 'required|string',
            'product_image1' => 'required|image',
            'product_image2' => 'required|image',
            'product_image3' => 'required|image',
            'product_price' => 'required|numeric',
        ]);

        // Tangani unggahan file untuk gambar
        $image1Path = $request->file('product_image1')->store('public/product_images');
        $image2Path = $request->file('product_image2')->store('public/product_images');
        $image3Path = $request->file('product_image3')->store('public/product_images');

        // Buat instance Product baru
        $product = new Product();
        $product->product_title = $request->input('product_title');
        $product->description = $request->input('description');
        $product->product_category = $request->input('product_category');
        $product->product_brand = $request->input('product_brands');
        $product->product_image1 = $image1Path;
        $product->product_image2 = $image2Path;
        $product->product_image3 = $image3Path;
        $product->product_price = $request->input('product_price');
        $product->save();

        // Opsional, Anda bisa mengembalikan respon atau redirect kembali
        return redirect()->back()->with('success', 'Product inserted successfully');
    }

    public function showProductDetail()
    {
        return view('product_detail');
    }

    public function editCategory($id)
    {
        $category = InsertCategories::find($id);
        return view('admin_area.edit_category', compact('category'));
    }

    public function updateCategory(Request $request, $id)
    {
        $category = InsertCategories::find($id);
        $category->categories_title = $request->input('categories_title');
        $category->save();

        return redirect('/admin?view=view_categories')->with('success', 'Category updated successfully.');
    }

    public function deleteCategory($id)
    {
        $category = InsertCategories::find($id);
        $category->delete();

        return redirect('/admin?view=view_categories')->with('success', 'Category deleted successfully.');
    }

    public function editBrand($id)
    {
        $brands = InsertBrands::find($id);
        return view('admin_area.edit_brand', compact('brands'));
    }

    public function updateBrand(Request $request, $id)
    {
        $brand = InsertBrands::find($id);
        $brand->brands_title = $request->input('brands_title');
        $brand->save();

        return redirect('/admin?view=view_brands')->with('success', 'Category updated successfully.');
    }

    public function deleteBrand($id)
    {
        $brand = InsertBrands::find($id);
        $brand->delete();

        return redirect('/admin?view=view_brands')->with('success', 'Category deleted successfully.');
    }

    // Tambahkan metode untuk menampilkan tampilan welcome
    public function showWelcome()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('admin.products.view')->with('error', 'Produk tidak ditemukan.');
        }
        return view('admin_area.edit_product', compact('product'));
    }

    public function updateProduct(Request $request, $id)
{
    $product = Product::find($id);

    if (!$product) {
        return redirect()->route('admin.products.view')->with('error', 'Produk tidak ditemukan.');
    }

    $product->product_title = $request->input('product_title');
    $product->description = $request->input('description');
    $product->product_category = $request->input('product_category');
    $product->product_brand = $request->input('product_brands');

    // Perbarui gambar jika ada gambar baru yang diunggah
    if ($request->hasFile('product_image1')) {
        $product->product_image1 = $request->file('product_image1')->store('public/product_images');
    }

    if ($request->hasFile('product_image2')) {
        $product->product_image2 = $request->file('product_image2')->store('public/product_images');
    }

    if ($request->hasFile('product_image3')) {
        $product->product_image3 = $request->file('product_image3')->store('public/product_images');
    }

    $product->product_price = $request->input('product_price');

    try {
        $product->save();
        return redirect()->route('admin.products.view')->with('success', 'Produk berhasil diperbarui.');
    } catch (\Exception $e) {
        return redirect()->route('admin.products.view')->with('error', 'Gagal memperbarui produk: ' . $e->getMessage());
    }
}


    public function deleteProduct($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('admin.products.view')->with('error', 'Produk tidak ditemukan.');
        }

        try {
            $product->delete();
            return redirect()->route('admin.products.view')->with('success', 'Produk berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.products.view')->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }

    public function viewProducts()
    {
        $products = Product::all();
        return view('admin_area.view_products', compact('products'));
    }

}
