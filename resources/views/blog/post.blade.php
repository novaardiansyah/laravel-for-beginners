@extends('layouts.main')

@section('container')
  <div class="row justify-content-center mb-4">
    <div class="col-lg-8">
      <article>
        <h2 class="text-primary mb-0">{{ $post->title }}</h2>
        <small class="d-block mb-3 text-capitalize">By. <a href="/posts?authors={{ $post->user->username }}"
            class="text-decoration-none">{{ $post->user->name }}</a> in <a
            href="/posts?category={{ $post->category->slug }}"
            class="text-decoration-none">{{ $post->category->name }}</a></small>

        <img src="https://source.unsplash.com/1080x480?{{ $post->category->name }}" class="img-fluid"
          alt="{{ $post->category->name }}" />

        <article class="my-3">
          {!! $post->body !!}
        </article>

        <a href="/posts" class="text-decoration-none d-block mt-3">back to posts</a>
      </article>
    </div>
  </div>
@endsection
