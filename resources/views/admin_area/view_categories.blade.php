<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title_Categories</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories ?? [] as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ $category->categories_title }}</td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal" data-bs-id="{{ $category->id }}" data-bs-title="{{ $category->categories_title }}">Edit</button>
        <a href="{{ url('admin_area/delete_category', $category->id) }}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
