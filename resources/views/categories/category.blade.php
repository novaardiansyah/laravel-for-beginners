@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-6 mb-3">
      <h4 class="text-capitalize">List Category: {{ $category }}</h4>
      <ul class="list-group">
        @foreach ($posts as $post)
          <li class="list-group-item">
            <h5>
              <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                {{ $post->title }}
              </a>
            </h5>
            <p>{{ $post->excerpt }}</p>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
