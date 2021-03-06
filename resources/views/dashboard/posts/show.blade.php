@extends('dashboard.layouts.main')

@section('container')
  <div class="row my-3">
    <div class="col-lg-10">
      <h2 class="text-primary mb-3">{{ $post->title }}</h2>

      <a href="/dashboard/posts" class="btn btn-success mb-1 align-middle">
        <span class="d-flex">
          <span data-feather="arrow-left" class="align-self-center"></span>
          &nbsp;Back
        </span>
      </a>

      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-1">
        <span class="d-flex">
          <span data-feather="edit" class="align-self-center"></span>
          &nbsp;Edit
        </span>
      </a>

      <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline mb-1">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
          <span class="d-flex">
            <span data-feather="x-circle" class="align-self-center"></span>
            &nbsp;Delete
          </span>
        </button>
      </form>

      <div class="post-images">
        @if ($post->image)
          <div style="max-height: 380px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3"
              alt="{{ asset('storage/' . $post->image) }}" />
          </div>
        @else
          <img src="https://source.unsplash.com/1080x480?{{ $post->category->name }}" class="img-fluid mt-3"
            alt="{{ $post->category->name }}" />
        @endif
      </div>

      <article class="my-3">
        {!! $post->body !!}
      </article>
    </div>
  </div>
@endsection
