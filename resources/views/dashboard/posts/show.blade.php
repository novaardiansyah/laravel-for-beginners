@extends('dashboard.layouts.main')

@section('container')
  <div class="row my-3">
    <div class="col-lg-10">
      <article>
        <h2 class="text-primary mb-3">{{ $post->title }}</h2>

        <a href="/dashboard/posts" class="btn btn-success mb-1 align-middle">
          <span class="d-flex">
            <span data-feather="arrow-left" class="align-self-center"></span>
            &nbsp;Back to all my posts
          </span>
        </a>

        <a href="" class="btn btn-warning mb-1">
          <span class="d-flex">
            <span data-feather="edit" class="align-self-center"></span>
            &nbsp;Edit
          </span>
        </a>

        <a href="" class="btn btn-danger mb-1">
          <span class="d-flex">
            <span data-feather="x-circle" class="align-self-center"></span>
            &nbsp;Delete
          </span>
        </a>

        <img src="https://source.unsplash.com/1080x480?{{ $post->category->name }}" class="img-fluid mt-3"
          alt="{{ $post->category->name }}" />

        <article class="my-3">
          {!! $post->body !!}
        </article>

        <a href="/dashboard/posts" class="text-decoration-none d-block mt-3">back to posts</a>
      </article>
    </div>
  </div>
@endsection
