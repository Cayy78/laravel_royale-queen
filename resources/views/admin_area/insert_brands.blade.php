<form action="{{ url('admin_area/insert_brand') }}" method="post" class="mb-2">
  @csrf
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat-title" placeholder="Insert Brands" aria-label="Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
  <!-- <input type="Submit" class="form-control bg-info" 
   name="insert-cat" value="Insert categories" >-->
   <button class="bg-info p-2 my-3 border-0">Insert Brands</button>
</div>
</form>