@extends('layouts.main')

@section('container')
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-lg-6 mb-3">
        <h2>
          <a href="/posts/{{ $post['slug'] }}" class="text-decoration-none">
            {{ $post['title'] }}
          </a>
        </h2>
        <small>by: {{ $post['author'] }}</small>
        <p>{{ $post['body'] }}</p>
      </div>
    @endforeach
  </div>
@endsection
