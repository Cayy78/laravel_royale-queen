<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commerce</title>
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
        .card-img-top {
            width: 90%;
            height: 300px;
            object-fit: contain;
        }
        .product-images {
            display: flex;
            gap: 10px;
        }
        .product-images img {
            max-width: 100%;
            max-height: 200px;
            object-fit: contain;
        }
        .product-detail {
            padding: 15px;
        }
        .product-description, .product-price {
            padding: 15px;
            margin-bottom: 10px;
        }
        .product-description {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <img src="{{ asset('image/logo.png') }}" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-white" href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                    </ul>
                    <form action="{{ route('search') }}" method="GET" class="d-flex mb-4">
                        <input class="form-control me-2" type="search" name="query" placeholder="Search for products..." aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Second child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    @if(Auth::check())
                        <a class="nav-link" href="#">Welcome {{ Auth::user()->name }}</a>
                    @else
                        <a class="nav-link" href="#">Welcome Guest</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if(Auth::check())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link" style="color: inherit; text-decoration: inherit;">Logout</button>
                        </form>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @endif
                </li>
            </ul>
        </nav>

        <!-- Fourth Child -->
        <div class="row">
            <div class="col-md-10">
                <!-- Products -->
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4 mb-2">
                            <div class="card" style="width: 30rem;">
                                <img src="{{ asset('storage/' . str_replace('public/', '', $product->product_image1)) }}" class="card-img-top" alt="{{ $product->product_title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->product_title }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <a href="{{ route('cart.add', ['id' => $product->id]) }}" class="btn btn-dark add-to-cart">Add to cart</a>
                                    <a href="{{ url('product_detail', ['id' => $product->id]) }}" class="btn btn-secondary">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2 bg-secondary p-0">
                <!-- Brands to be displayed -->
                <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-dark">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
    </li>
    @foreach($brands as $brand)
        <li class="nav-item">
            <a href="#" class="nav-link text-light"><h4>{{ $brand->brands_title }}</h4></a>
        </li>
    @endforeach
</ul>
                <!-- Categories to be displayed -->
                <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-dark">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
    </li>
    @foreach($categories as $category)
        <li class="nav-item">
            <a href="#" class="nav-link text-light"><h4>{{ $category->categories_title }}</h4></a>
        </li>
    @endforeach
</ul>
            </div>
        </div>

        <!-- Last Child -->
        <div class="bg-dark p-3 text-center text-light">
            <p>Designed by kami-2024</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
