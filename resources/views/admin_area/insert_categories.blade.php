@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<h2 class="text-center">Insert Categories</h2>
<form action="{{ url('admin_area/insert_category') }}" method="post" class="mb2">
    @csrf
    <div class="input-group w-90 mb-2">
  <span class="input-group-text bg-dark" id="basic-addon1"><i class="fa-solid fa-receipt" style= "color: white;"></i></span>
  <input type="text" class="form-control" name="categories_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
</div>
@error('categories_title')<p class="text text-danger">{{$message}}</p>@enderror

<div class="input-group w-10 mb-2 m-auto">

   <button class="bg-dark text-light p-2 my-3 border-0">Insert Categories</button>
</div>
</form>
