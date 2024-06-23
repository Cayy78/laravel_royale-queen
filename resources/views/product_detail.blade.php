<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commerce</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- custom css for styling -->
    <style>
        .logo {
    width: 100px; /* Adjusted width */
    height: auto; /* Adjust height to maintain aspect ratio */
}
.card-img-top {
    width: 90%;
    height: 300px;
    object-fit: contain;
}
.product-images {
    display: flex;
    gap: 20px; /* Adjusted gap to reduce space between images */
}
.product-images img {
    width: 100%;
    max-width: 48%; /* Adjusted to fit two images with closer spacing */
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
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <img src="{{ asset('image/logo.png') }}" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Total Price:100/-</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- fourth child -->
        <div class="container my-3">
            <div class="row">
                <!-- Product Image and Add to Cart -->
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="{{ asset('image/Sepatu Lari 3.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Add to cart</a>
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="col-md-8">
                    <div class="product-detail">
                        <h2 class="text-center">Detail Product</h2>
                        <div class="product-images mb-3">
                            <img src="{{ asset('image/Sepatu Lari 3.png') }}" class="img-fluid" alt="Product Image 1">
                            <img src="{{ asset('image/Sepatu Lari 3.png') }}" class="img-fluid" alt="Product Image 2">
                        </div>
                        <div class="product-description">
                            <h5>Product Description</h5>
                            <p>This is the detailed description of the product. It covers all the features, specifications, and benefits of the product.</p>
                        </div>
                        <div class="product-price">
                            <h5>Price</h5>
                            <p>$100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- last child -->
        <div class="bg-dark p-3 text-center">
            <p>Designed by kami-2024</p>
        </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous">
    </script>
</body>
</html>
