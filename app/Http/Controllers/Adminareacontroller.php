<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Insert_Categories;
use App\Models\InsertCategories;
use App\Http\Requests\Insert_Brands;
use App\Models\InsertBrands;

class Adminareacontroller extends Controller
{

    public function insertbrand(Insert_Brands $request)
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

    public function showInsertProductForm()
    {
        return view('admin_area.insert_product');
    }

    public function showProductDetail()
    {
        return view('product_detail');
    }
}
