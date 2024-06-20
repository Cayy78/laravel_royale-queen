@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

<form action="{{ url('admin_area/update_brand', $brand->id) }}" method="post" class="mb-2">
    @csrf
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brands_title" placeholder="Edit Brand" value="{{ $brand->brands_title }}" aria-label="Brand" aria-describedby="basic-addon1">
    </div>
    @error('brands_title')<p class="text text-danger">{{$message}}</p>@enderror

    <div class="input-group w-10 mb-2 m-auto">
        <button class="bg-info p-2 my-3 border-0">Update Brand</button>
    </div>
</form>
