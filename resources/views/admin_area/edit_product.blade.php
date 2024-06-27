<!-- resources/views/admin_area/edit_product.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit Product</h2>
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="product_title">Product Title</label>
                <input type="text" class="form-control" id="product_title" name="product_title" value="{{ $product->product_title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="product_category">Category</label>
                <input type="text" class="form-control" id="product_category" name="product_category" value="{{ $product->product_category }}" required>
            </div>
            <div class="form-group">
                <label for="product_brands">Brand</label>
                <input type="text" class="form-control" id="product_brands" name="product_brands" value="{{ $product->product_brand }}" required>
            </div>
            <div class="form-group">
                <label for="product_image1">Product Image 1</label>
                <input type="file" class="form-control" id="product_image1" name="product_image1">
                <img src="{{ Storage::url($product->product_image1) }}" alt="{{ $product->product_title }}" width="100">
            </div>
            <div class="form-group">
                <label for="product_image2">Product Image 2</label>
                <input type="file" class="form-control" id="product_image2" name="product_image2">
                <img src="{{ Storage::url($product->product_image2) }}" alt="{{ $product->product_title }}" width="100">
            </div>
            <div class="form-group">
                <label for="product_image3">Product Image 3</label>
                <input type="file" class="form-control" id="product_image3" name="product_image3">
                <img src="{{ Storage::url($product->product_image3) }}" alt="{{ $product->product_title }}" width="100">
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" class="form-control" id="product_price" name="product_price" value="{{ $product->product_price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
