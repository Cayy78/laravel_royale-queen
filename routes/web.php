<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAreaController; 

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

Route::get('/admin_brand', function () {
    return view('admin_area/insert_brand');
});

Route::get('/admin_area/insert_brand', [AdminAreaController::class, 'showInsertBrandForm']);
Route::post('/admin_area/insert_brand', [AdminAreaController::class, 'insertBrand'])->name('admin_area.insert_brand');




