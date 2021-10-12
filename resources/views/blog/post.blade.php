@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <article>
        <h2 class="text-primary">{{ $post['title'] }}</h2>
        <small>By: {{ $post['author'] }}</small>
        <p>{{ $post['body'] }}</p>
        <a href="/blog">back to posts</a>
      </article>
    </div>
  </div>
@endsection
