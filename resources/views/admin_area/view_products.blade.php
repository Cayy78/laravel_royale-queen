<!-- resources/views/admin_area/view_products.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Product List</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Image 1</th>
                    <th scope="col">Image 2</th>
                    <th scope="col">Image 3</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->product_category }}</td>
                        <td>{{ $product->product_brand }}</td>
                        <td><img src="{{ Storage::url($product->product_image1) }}" alt="{{ $product->product_title }} Image 1" width="50"></td>
                        <td><img src="{{ Storage::url($product->product_image2) }}" alt="{{ $product->product_title }} Image 2" width="50"></td>
                        <td><img src="{{ Storage::url($product->product_image3) }}" alt="{{ $product->product_title }} Image 3" width="50"></td>

                        <td>${{ number_format($product->product_price, 2) }}</td>
                        <td>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.products.delete', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
