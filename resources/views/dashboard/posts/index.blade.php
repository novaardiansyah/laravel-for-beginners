@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">My Posts</h2>
  </div>

  <div class="row">
    <div class="col-md-8 col-lg-10">
      <div class="table-responsive">
        <table class="table table-dark table-hover table-borderless table-striped">
          <thead class="text-center">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody class="align-middle">
            @foreach ($posts as $post)
              <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td class="text-start">{{ Str::substr($post->title, 0, 70) . '...' }}</td>
                <td class="text-center">{{ $post->category->name }}</td>
                <td class="text-nowrap">
                  <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
                    <span data-feather="eye"></span>
                  </a>
                  <a href="" class="badge bg-warning">
                    <span data-feather="edit"></span>
                  </a>
                  <a href="" class="badge bg-danger">
                    <span data-feather="x-circle"></span>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
