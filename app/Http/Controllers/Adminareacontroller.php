<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminareacontroller extends Controller
{
    //
    public function showInsertBrandForm()
    {
        return view('admin_area.insert_brand');
    }

    // Menangani insert brand
    public function insertBrand(Request $request)
    {
        // Validasi data
        $request->validate([
            'brand_name' => 'required|string|max:255',
        ]);

        // Simpan data brand ke database (misal menggunakan model Brand)
        // Brand::create(['name' => $request->brand_name]);

        return redirect()->back()->with('success', 'Brand has been inserted successfully');
    }
}
