@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-6 mb-3">
      <h4 class="text-capitalize mb-3">{{ $title }}</h4>

      @if ($posts->count())
        <div class="card mb-3">
          <img src="https://source.unsplash.com/1080x480/?{{ $posts[0]->category->name }}" class="card-img-top"
            alt="{{ $posts[0]->category->name }}">
          <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">
                {{ $posts[0]->title }}
              </a></h3>

            <small class="d-block mb-3 text-capitalize text-muted">By. <a href="/authors/{{ $posts[0]->user->username }}"
                class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a
                href="/categories/{{ $posts[0]->category->slug }}"
                class="text-decoration-none">{{ $posts[0]->category->name }}</a> <span
                class="text-lowercase">{{ $posts[0]->created_at->diffForHumans() }}</span></small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary text-decoration-none">
              Read More
            </a>
          </div>
        </div>
      @else
        <p class="text-center fs-4">Post not found,</p>
      @endif

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
