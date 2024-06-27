<?php
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAreaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

Route::get('/', [WelcomeController::class,'index'])->name('home');

// Rute admin
Route::get('/admin', [AdminAreaController::class, 'view'])->name('admin_area.view');

// Rute untuk form insert product
Route::get('/admin_area/insert_product', [AdminAreaController::class, 'showInsertProductForm']);
Route::post('/admin_area/insert_product', [AdminAreaController::class, 'insertProduct'])->name('admin_area.insert_product');

//search
Route::get('/search', [ProductController::class, 'search'])->name('search');

// Rute untuk product detail
Route::get('/product_detail/{id}', [AdminAreaController::class, 'showProductDetail'])->name('product.detail');

// Rute untuk insert brand dan category
Route::post('/admin_area/insert_brand', [AdminAreaController::class, 'insertBrand'])->name('admin_area.insert_brand');
Route::post('/admin_area/insert_category', [AdminAreaController::class, 'insertCategory'])->name('admin_area.insert_category');

// Rute untuk update dan delete category
Route::post('/admin_area/update_category/{id}', [AdminAreaController::class, 'updateCategory'])->name('admin_area.update_category');
Route::get('/admin_area/delete_category/{id}', [AdminAreaController::class, 'deleteCategory'])->name('admin_area.delete_category');

// Rute untuk update dan delete brand
Route::post('/admin_area/update_brand/{id}', [AdminAreaController::class, 'updateBrand'])->name('admin_area.update_brand');
Route::get('/admin_area/delete_brand/{id}', [AdminAreaController::class, 'deleteBrand'])->name('admin_area.delete_brand');

// Rute untuk edit, update, dan delete produk
Route::get('/admin/products/edit/{id}', [AdminAreaController::class, 'editProduct'])->name('admin.products.edit');
Route::post('/admin/products/update/{id}', [AdminAreaController::class, 'updateProduct'])->name('admin.products.update');
Route::delete('/admin/products/delete/{id}', [AdminAreaController::class, 'deleteProduct'])->name('admin.products.delete');

// Rute untuk menampilkan daftar produk
Route::get('/admin/products/view', [AdminAreaController::class, 'viewProducts'])->name('admin.products.view');

// Rute untuk halaman login, register, dan logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk halaman contact
Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Rute untuk halaman keranjang
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::get('/cart/add/{id}', [CartController::class, 'addtocart'])->name('cart.add');
