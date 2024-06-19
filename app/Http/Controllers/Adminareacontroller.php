<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Insert_Categories;
use App\Models\InsertCategories;

class Adminareacontroller extends Controller
{

    public function brandCategory(Request $request)
    {
        return redirect('/admin?view=brands')->with('success', 'Category added successfully.');
    }

    public function insertCategory(Insert_Categories $request)
    {
        $input = $request->validated();
        InsertCategories::create($input);
        return redirect('/admin?view=categories')->with('success', 'Category added successfully.');
    }

    public function showInsertProductForm()
    {
        return view('admin_area.insert_product');
    }

    public function showProductDetail()
    {
        return view('product_detail');
    }
}
