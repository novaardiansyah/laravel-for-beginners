@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <article>
        <h2 class="text-primary mb-3">{{ $post->title }}</h2>
        {!! $post->body !!}
        <a href="/blog">back to posts</a>
      </article>
    </div>
  </div>
@endsection
