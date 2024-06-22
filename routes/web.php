<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAreaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminAreaController::class, 'view'])->name('admin_area.view');

Route::get('/admin_product', function () {
    return view('admin_area.insert_product');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin_area/insert_product', [AdminAreaController::class, 'showInsertProductForm']);

Route::get('product_detail', [AdminAreaController::class, 'showProductDetail']);

Route::post('/admin_area/insert_brand', [AdminAreaController::class, 'insertBrand'])->name('admin_area.insert_brand');

Route::post('/admin_area/insert_category', [AdminAreaController::class, 'insertCategory'])->name('admin_area.insert_category');

Route::post('/admin_area/update_category/{id}', [AdminAreaController::class, 'updateCategory'])->name('admin_area.update_category');
Route::get('/admin_area/delete_category/{id}', [AdminAreaController::class, 'deleteCategory'])->name('admin_area.delete_category');

Route::post('/admin_area/update_brand/{id}', [AdminAreaController::class, 'updateBrand'])->name('admin_area.update_brand');
Route::get('/admin_area/delete_brand/{id}', [AdminAreaController::class, 'deleteBrand'])->name('admin_area.delete_brand');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route untuk halaman login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Route untuk logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk halaman home setelah login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route default
Route::get('/', function () {
    return view('welcome');
});
