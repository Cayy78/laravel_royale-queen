<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- Custom CSS file -->
     <link rel="stylesheet" href="{{ asset('style.css') }}">
     <style>
        .logo {
            width: 100px;
            height: auto; 
        }
        .admin_image{
            width: 100px;
            object-fit: contain;
        }
     </style>
</head>
<body>
    <div class="bg-dark text-light">
    <ul class="nav flex-column">
    @if(isset($brands))
    @foreach($brands as $brand)
    @endforeach
@else
@endif
    </ul>
</div>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- Navbar pertama -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <img src="{{ asset('image/logo.png') }}" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link text-light">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- Second child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Third child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href=""><img src="{{ asset('image/Sepatu Lari 1.png') }}" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <!-- Button Group -->
                <div class="button text-center">
                    <button class="my-3"><a href="{{ url('admin_area/insert_product') }}" class="nav-link text-light bg-dark my-1">Insert Products</a></button>
                    <button><a href="{{ route('admin_area.view', ['view' => 'view_products']) }}" class="nav-link text-light bg-dark my-1">View Products</a></button>
                    <button><a href="{{ url('admin?view=categories') }}" class="nav-link text-light bg-dark my-1">Insert Categories</a></button>
                    <button><a href="{{ url('admin?view=view_categories') }}" class="nav-link text-light bg-dark my-1">View Categories</a></button>
                    <button><a href="{{ url('admin?view=brands') }}" class="nav-link text-light bg-dark my-1">Insert Brands</a></button>
                    <button><a href="{{ url('admin?view=view_brands') }}" class="nav-link text-light bg-dark my-1">View Brands</a></button>
                    <button><a href="{{ url('admin') }}" class="nav-link text-light bg-dark my-1">All Orders</a></button>
                    <button><a href="{{ url('admin') }}" class="nav-link text-light bg-dark my-1">All Payments</a></button>
                    <button><a href="{{ url('admin') }}" class="nav-link text-light bg-dark my-1">List Users</a></button>
                    <button><a href="{{ url('logout') }}" class="nav-link text-light bg-dark my-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!-- Fourth child -->
        <div class="container my-5">
            @if(request()->get('view') == 'categories')
                @include('admin_area.insert_categories')
            @elseif(request()->get('view') == 'brands')
                @include('admin_area.insert_brands') 
            @elseif(request()->get('view') == 'view_categories')
                @include('admin_area.view_categories')
            @elseif(request()->get('view') == 'view_brands')
                @include('admin_area.view_brands')
            @else
                <p class="text-center">Select an option from above to manage details.</p>
            @endif
        </div>

        <!-- Footer -->
        <div class="bg-dark text-light p-3 text-center footer">
            <p>Designed by kami-2024</p>
        </div> 
        
        <!-- Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editCategoryForm" method="post">
                            @csrf
                            <div class="input-group w-90 mb-2">
                                <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
                                <input type="text" class="form-control" id="edit_category_title" name="categories_title" placeholder="Edit Category" aria-label="Category" aria-describedby="basic-addon1">
                            </div>
                            @error('categories_title')<p class="text text-danger">{{$message}}</p>@enderror
                            <div class="input-group w-10 mb-2 m-auto">
                                <button class="bg-info p-2 my-3 border-0">Update Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editBrandModal" tabindex="-1" aria-labelledby="editBrandModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editBrandModalLabel">Edit Brand</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editBrandForm" method="post">
                            @csrf
                            <div class="input-group w-90 mb-2">
                                <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
                                <input type="text" class="form-control" id="edit_brand_title" name="brands_title" placeholder="Edit Brand" aria-label="Brand" aria-describedby="basic-addon1">
                            </div>
                            @error('brands_title')<p class="text text-danger">{{$message}}</p>@enderror
                            <div class="input-group w-10 mb-2 m-auto">
                                <button class="bg-info p-2 my-3 border-0">Update Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>

    <script>
        const editCategoryModal = document.getElementById('editCategoryModal');
        editCategoryModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const categoryId = button.getAttribute('data-bs-id');
            const categoryTitle = button.getAttribute('data-bs-title');

            const modalTitle = editCategoryModal.querySelector('.modal-title');
            const inputTitle = editCategoryModal.querySelector('#edit_category_title');
            const form = editCategoryModal.querySelector('#editCategoryForm');

            modalTitle.textContent = `Edit Category: ${categoryTitle}`;
            inputTitle.value = categoryTitle;
            form.action = `/admin_area/update_category/${categoryId}`;
        });

        const editBrandModal = document.getElementById('editBrandModal');
        editBrandModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const brandId = button.getAttribute('data-bs-id');
            const brandTitle = button.getAttribute('data-bs-title');

            const modalTitle = editBrandModal.querySelector('.modal-title');
            const inputTitle = editBrandModal.querySelector('#edit_brand_title');
            const form = editBrandModal.querySelector('#editBrandForm');

            modalTitle.textContent = `Edit Brand: ${brandTitle}`;
            inputTitle.value = brandTitle;
            form.action = `/admin_area/update_brand/${brandId}`;
        });
    </script>
</body>
</html>
