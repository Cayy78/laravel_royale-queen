<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminareacontroller extends Controller
{

    public function brandCategory(Request $request)
    {
        return redirect('/admin?view=brands')->with('success', 'Category added successfully.');
    }

    public function insertCategory(Request $request)
    {
        return redirect('/admin?view=categories')->with('success', 'Category added successfully.');
    }

    public function showInsertProductForm()
    {
        return view('admin_area.insert_product');
    }
}
