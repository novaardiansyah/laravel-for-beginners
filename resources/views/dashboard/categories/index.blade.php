@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2>Post Categories</h2>
  </div>

  <div class="row">
    <div class="col-md-8">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-3">create new category</a>

      @if (session()->has('success') || session()->has('error'))
        <div
          class="alert {{ session()->has('success') ? 'alert-success' : 'alert-danger' }} alert-dismissible fade show mb-3 mb-0"
          role="alert">
          <span class="fs-6">{{ session()->has('success') ? session('success') : session('error') }}</span>

          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="table-responsive">
        <table class="table table-dark table-hover table-borderless table-striped">
          <thead class="text-center">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="align-middle">
            @foreach ($categories as $category)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-center">{{ $category->name }}</td>
                <td class="text-nowrap text-center">
                  <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info">
                    <span data-feather="eye"></span>
                  </a>
                  <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                    <span data-feather="edit"></span>
                  </a>
                  <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                      <span data-feather="x-circle"></span>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
