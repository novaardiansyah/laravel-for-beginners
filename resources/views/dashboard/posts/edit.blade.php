@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="text-capitalize">edit post</h2>
  </div>

  <div class="row pb-4">
    <div class="col-md-8">
      <div class="card shadow-md py-2">
        <div class="card-body">
          <form action="/dashboard/posts/{{ $post->slug }}" method="POST" autocomplete="off">
            @method('PATCH')
            @csrf
            <div class="mb-4">
              <label for="title" class="form-label">Title <span class="text-danger h6">*</span></label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                placeholder="do you have any good ideas today?" value="{{ old('title', $post->title) }}" required />
              @error('title')
                <div class="invalid-feedback pt-2 h6">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="slug" class="form-label">Slug <span class="text-danger h6">*</span></label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                placeholder="have-any-good-idea?" value="{{ old('slug', $post->slug) }}" required />
              @error('slug')
                <div class="invalid-feedback pt-2 h6">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="category_id" class="form-label">Category <span class="text-danger h6">*</span></label>
              <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id"
                required>
                @foreach ($categories as $category)
                  @if (old('category_id', $post->category_id) == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                  @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endif
                @endforeach
              </select>
              @error('category_id')
                <div class="invalid-feedback pt-2 h6">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="body" class="form-label">Body <span class="text-danger h6">*</span></label>
              @error('body')
                <p class="text-danger" style="font-weight: 500;">
                  <small>{{ $message }}</small>
                </p>
              @enderror
              <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
              <trix-editor input="body"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Update Post</button>
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
