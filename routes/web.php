<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAreaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminAreaController::class, 'view'])->name('admin_area.view');

Route::get('/admin_product', function () {
    return view('admin_area.insert_product');
});

Route::get('/admin_area/insert_product', [AdminAreaController::class, 'showInsertProductForm']);

Route::get('product_detail', [AdminAreaController::class, 'showProductDetail']);

Route::post('/admin_area/insert_brand', [AdminAreaController::class, 'insertBrand'])->name('admin_area.insert_brand');

Route::post('/admin_area/insert_category', [AdminAreaController::class, 'insertCategory'])->name('admin_area.insert_category');

Route::post('/admin_area/update_category/{id}', [AdminAreaController::class, 'updateCategory'])->name('admin_area.update_category');
Route::get('/admin_area/delete_category/{id}', [AdminAreaController::class, 'deleteCategory'])->name('admin_area.delete_category');
