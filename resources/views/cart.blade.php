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

        <section class="h-100 h-custom" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <div class="card">
                    <div class="card-body p-4">
          
                      <div class="row">
          
                      <div class="col-lg-7">
    <hr>
    @foreach ($cartItems as $item)
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div>
                    <img src="{{ asset($item->product->product_image1) }}" class="img-fluid rounded-3" alt="Product Image" style="width: 65px;">
                    <div class="ms-3">
                        <h5>{{ $item->product->name }}</h5>
                        <p class="small mb-0">{{ $item->product->description }}</p>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div style="width: 80px;">
                        <h5 class="mb-0">${{ $item->product->price }}</h5>
                    </div>
                    <a href="/" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
          
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                  <div>
                                    <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                      class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                  </div>
                                  <div class="ms-3">
                                    <h5>nama sepatunya</h5>
                                    <p class="small mb-0">deskripsi sepatu</p>
                                  </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                  <div style="width: 80px;">
                                    <h5 class="mb-0">$900</h5>
                                  </div>
                                  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
          
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                  <div>
                                    <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                      class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                  </div>
                                  <div class="ms-3">
                                    <h5>nama sepatunya</h5>
                                    <p class="small mb-0">deskripsi sepatu</p>
                                  </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                  <div style="width: 80px;">
                                    <h5 class="mb-0">$900</h5>
                                  </div>
                                  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
          
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                  <div>
                                    <img
                                      src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                      class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                  </div>
                                  <div class="ms-3">
                                    <h5>nama sepatunya</h5>
                                    <p class="small mb-0">deskripsi sepatu</p>
                                  </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                  <div style="width: 80px;">
                                    <h5 class="mb-0">$900</h5>
                                  </div>
                                  <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                                </div>
                              </div>
                            </div>
                          </div>
          
                        </div>
                        <div class="col-lg-5">
          
                          <div class="card bg-primary text-white rounded-3">
                            <div class="card-body">
                              <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0">Card details</h5>
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                  class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                              </div>
          
                              <p class="small mb-2">Card type</p>
                              <a href="#!" type="submit" class="text-white"><i
                                  class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                              <a href="#!" type="submit" class="text-white"><i
                                  class="fab fa-cc-visa fa-2x me-2"></i></a>
                              <a href="#!" type="submit" class="text-white"><i
                                  class="fab fa-cc-amex fa-2x me-2"></i></a>
                              <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a>
          
                              <form class="mt-4">
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                  <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                                    placeholder="Cardholder's Name" />
                                  <label class="form-label" for="typeName">Cardholder's Name</label>
                                </div>
          
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                  <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                                    placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                                  <label class="form-label" for="typeText">Card Number</label>
                                </div>
          
                                <div class="row mb-4">
                                  <div class="col-md-6">
                                    <div data-mdb-input-init class="form-outline form-white">
                                      <input type="text" id="typeExp" class="form-control form-control-lg"
                                        placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                      <label class="form-label" for="typeExp">Expiration</label>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div data-mdb-input-init class="form-outline form-white">
                                      <input type="password" id="typeText" class="form-control form-control-lg"
                                        placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                      <label class="form-label" for="typeText">Cvv</label>
                                    </div>
                                  </div>
                                </div>
          
                              </form>
          
                              <hr class="my-4">

                              <div class="d-flex justify-content-between mb-4">
                                <p class="mb-2">Total</p>
                                <p class="mb-2">$4818.00</p>
                              </div>
          
                              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                  <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                </div>
                              </button>
          
                            </div>
                          </div>
          
                        </div>
          
                      </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
        <!-- Last Child -->
        <div class="bg-dark p-3 text-center text-light">
            <p>Designed by kami-2024</p>
        </div>
    </div>
</body>