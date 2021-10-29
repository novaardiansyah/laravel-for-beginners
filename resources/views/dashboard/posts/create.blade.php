@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="text-capitalize">create new post</h2>
  </div>

  <div class="row pb-4">
    <div class="col-md-8">
      <div class="card shadow-md py-2 bg-dark text-white">
        <div class="card-body">
          <form action="/dashboard/posts" method="POST" autocomplete="off">
            @csrf
            <div class="mb-4">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title"
                placeholder="do you have any good ideas today?" />
            </div>

            <div class="mb-4">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slug" name="slug" placeholder="have-any-good-idea?" />
            </div>

            <button type="submit" class="btn btn-primary">Create Post</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
      fetch('/dashboard/posts/createSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>
@endsection
