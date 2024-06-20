<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title_Brands</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($brands ?? [] as $brand)
      <tr>
        <th scope="row">{{ $brand->id }}</th>
        <td>{{ $brand->brands_title }}</td>
        <td>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBrandModal" data-bs-id="{{ $brand->id }}" data-bs-title="{{ $brand->brands_title }}">Edit</button>
          <a href="{{ url('admin_area/delete_brand', $brand->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  