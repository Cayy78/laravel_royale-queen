@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

<form action="{{ url('admin_area/update_category', $category->id) }}" method="post" class="mb-2">
    @csrf
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="categories_title" placeholder="Edit Category" value="{{ $category->categories_title }}" aria-label="Category" aria-describedby="basic-addon1">
    </div>
    @error('categories_title')<p class="text text-danger">{{$message}}</p>@enderror

    <div class="input-group w-10 mb-2 m-auto">
        <button class="bg-info p-2 my-3 border-0">Update Category</button>
    </div>
</form>
