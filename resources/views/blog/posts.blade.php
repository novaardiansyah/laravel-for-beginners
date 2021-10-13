@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-6 mb-3">
      <h4 class="text-capitalize">List Posts:</h4>
      <ul class="list-group">
        @foreach ($posts as $post)
          <li class="list-group-item py-3 shadow-sm">
            <h5 class="mb-0">
              <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                {{ $post->title }}
              </a>
            </h5>
            <small class="d-block mb-3 text-capitalize">By. <a href="/authors/{{ $post->user->username }}"
                class="text-decoration-none">{{ $post->user->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}"
                class="text-decoration-none">{{ $post->category->name }}</a></small>

            <p class="mb-0">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
              Read More..
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
