<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Insert_Categories;
use App\Models\InsertCategories;
use App\Http\Requests\Insert_Brands;
use App\Models\InsertBrands;

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

        return view('admin_area.index');
    }

    public function showInsertProductForm()
    {
        return view('admin_area.insert_product');
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

}
