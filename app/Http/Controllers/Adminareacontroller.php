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
        }
        elseif ($view == 'view_brands') {
            $brands = InsertBrands::all();
            return view('admin_area.index', compact('brands'));
        }
        elseif ($view == 'view_products') {
            $products = Product::all();
            return view('admin_area.view_products', compact('products'));
        }

        return view('admin_area.index');
    }

    public function showInsertProductForm()
    {
        return view('admin_area.insert_product');
    }

    public function insertProduct(Request $request)
{
    // Validate incoming requests
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

    // Handle file uploads for images
    $image1Path = $request->file('product_image1')->store('product_images');
    $image2Path = $request->file('product_image2')->store('product_images');
    $image3Path = $request->file('product_image3')->store('product_images');

    // Create new Product instance
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

    // Optionally, you can return a response or redirect back
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
    return view('admin_area.edit_brand', compact('brand'));
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

}
