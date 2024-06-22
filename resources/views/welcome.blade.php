<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commerce</title>
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

    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
    <a class="nav-link text-white" href="#">Produk</a>
      </li>

        <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
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

<!-- second child -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">Login</a>
</li>

    </ul>
 </nav>

 <!-- third Child -->
  <div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Blom ada</p>
  </div>


  <!-- fourth child -->
   <div class="row">
    <div class="col-md-10">
        <!-- products -->
         <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card" style="width: 30rem;">
  <img src="image/Sepatu Lari 3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to cart</a>
    <a href="{{ url('product_detail') }}" class="btn btn-Secondary">View Details</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 30rem;">
  <img src="image/Sepatu Lari 1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to cart</a>
    <a href="#" class="btn btn-Secondary">View Details</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 30rem;">
  <img src="image/Sepatu Lari 2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to cart</a>
    <a href="#" class="btn btn-Secondary">View Details</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 30rem;">
  <img src="image/Sepatu Lari 2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to cart</a>
    <a href="#" class="btn btn-Secondary">View Details</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 30rem;">
  <img src="image/Sepatu Lari 2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to cart</a>
    <a href="#" class="btn btn-Secondary">View Details</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card" style="width: 30rem;">
  <img src="image/Sepatu Lari 2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Add to cart</a>
    <a href="#" class="btn btn-Secondary">View Details</a>
  </div>
</div>
            </div>
         </div>
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-dark">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Adidas</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Puma</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Nike</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Asics</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Doctor Marteen</
        h4></a>
        </li>
        </ul>

        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-dark">
        <a href="#" class="nav-link text-light"><h4>Categories</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Sport</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Casual</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Formal</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Sandals</
        h4></a>
        </li>
        <li class="nav-item ">
        <a href="#" class="nav-link text-light"><h4>Slip-ons</
        h4></a>
        </li>
        </ul>
    </div>
   </div>


<!-- last child -->
 -<div class="bg-dark p-3 text-center text-light">
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