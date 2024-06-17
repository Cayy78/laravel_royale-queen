<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Insertbrandcontroller extends Controller
{
    //
    public function showInsertForm()
    {
        return view('insert_brands');
    }

    // Metode untuk menangani form submission
    public function submitInsertForm(Request $request)
    {
        // Validasi data
        $request->validate([
            'brand-title' => 'required|string|max:255',
        ]);

        // Logika penyimpanan data ke dalam database atau operasi lainnya
        // Contoh:
        // Brand::create(['title' => $request->input('brand-title')]);

        // Redirect atau respon lainnya
        return redirect()->back()->with('success', 'Brand inserted successfully!');
    }
}


