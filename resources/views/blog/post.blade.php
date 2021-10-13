@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <article>
        <h2 class="text-primary mb-0">{{ $post->title }}</h2>
        <small class="d-block mb-3 text-capitalize">By. <a href="/"
            class="text-decoration-none">{{ $post->user->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}"
            class="text-decoration-none">{{ $post->category->name }}</a></small>

        {!! $post->body !!}
        <a href="/posts" class="text-decoration-none">back to posts</a>
      </article>
    </div>
  </div>
@endsection
