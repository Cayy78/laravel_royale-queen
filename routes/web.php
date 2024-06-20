<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAreaController; 
use App\Http\Controllers\UserController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin_area/index');
});

Route::get('/admin_product', function () {
    return view('admin_area/insert_product');
});

Route::get('/admin_area/insert_product', [AdminAreaController::class, 'showInsertProductForm']);

Route::get('product_detail', [AdminAreaController::class, 'showProductDetail']);

Route::post('/admin_area/insert_brand', [AdminAreaController::class, 'insertBrand'])->name('admin_area.insert_brand');

Route::post('/admin_area/insert_category', [AdminAreaController::class, 'insertCategory'])->name('admin_area.insert_category');

Route::post('/admin_area/view_categories', [AdminAreaController::class, 'viewCategories'])->name('admin_area.view_categories');



