<!-- resources/views/product_detail.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        .logo {
            width: 100px;
            height: auto;
        }
        .product-main-image {
            width: 100%;
            max-height: 400px;
            object-fit: contain;
            margin-bottom: 20px;
        }
        .product-images {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }
        .product-images img {
            width: 48%;
            max-height: 250px;
            object-fit: contain;
        }
        .product-detail {
            padding: 15px;
            display: flex;
            flex-direction: column;
        }
        .product-description {
            font-size: 16px;
            margin-top: 20px; /* Add some margin to push the description down if it's too long */
        }
        .product-price {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px; /* Add some margin to push the price down if it's too long */
        }
        .btn-add-to-cart {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <img src="{{ asset('image/logo.png') }}" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Product Detail -->
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image1)) }}" alt="{{ $product->product_title }}" class="product-main-image">
                </div>
                <div class="col-md-6">
                    <div class="product-images">
                        <img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image2)) }}" alt="{{ $product->product_title }}">
                        <img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image3)) }}" alt="{{ $product->product_title }}">
                    </div>
                    <div class="product-detail">
                        <h2>{{ $product->product_title }}</h2>
                        <p class="product-description">{{ $product->description }}</p>
                        <p class="product-price">Price: {{ formatRupiah($product->product_price) }}</p>
                        <a href="#" class="btn btn-dark btn-add-to-cart">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-dark p-3 text-center text-light">
            <p>Designed by kami-2024</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
