@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="text-capitalize">create new post</h2>
  </div>

  <div class="row pb-4">
    <div class="col-md-8">
      <div class="card shadow-md py-2">
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

            <div class="mb-4">
              <label for="category_id" class="form-label">Category</label>
              <select class="form-select" id="category_id" name="category_id">
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="mb-4">
              <label for="body" class="form-label">Body</label>
              <input id="body" type="hidden" name="body">
              <trix-editor input="body"></trix-editor>
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

    title.addEventListener('keyup', function() {
      fetch('/dashboard/posts/createSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>
@endsection
