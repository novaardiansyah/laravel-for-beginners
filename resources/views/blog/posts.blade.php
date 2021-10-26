@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-md-8 mb-3">
      <h4 class="text-capitalize text-center mb-3">{{ $title }}</h4>

      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}" />
        @endif
        @if (request('authors'))
          <input type="hidden" name="authors" value="{{ request('authors') }}" />
        @endif
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search.." name="search" autocomplete="off"
            value="{{ request('search') }}" />
          <button class="btn btn-dark" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    <div class="row justify-content-center">
      <div class="col-lg-8 mb-3">
        <div class="card mb-3">
          <img src="https://source.unsplash.com/1080x480?{{ $posts[0]->category->name }}" class="card-img-top"
            alt="{{ $posts[0]->category->name }}">
          <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                {{ Str::substr($posts[0]->title, 0, 35) . '...' }}
              </a></h3>

            <small class="d-block mb-3 text-capitalize text-muted">By. <a
                href="/posts?authors={{ $posts[0]->user->username }}"
                class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a
                href="/posts?category={{ $posts[0]->category->slug }}"
                class="text-decoration-none">{{ $posts[0]->category->name }}</a> <span
                class="text-lowercase">{{ $posts[0]->created_at->diffForHumans() }}</span></small>

            <p class="card-text">{{ Str::substr($posts[0]->excerpt, 0, 250) . '...' }}</p>

            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary text-decoration-none">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, .7)">
              <a href="/posts?category={{ $post->category->slug }}"
                class="text-white text-decoration-none">{{ $post->category->name }}</a>
            </div>

            <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top"
              alt="{{ $post->category->name }}" />

            <div class="card-body">
              <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                  {{ Str::substr($post->title, 0, 35) . '...' }}
                </a></h5>

              <small class="d-block mb-3 text-capitalize text-muted">By. <a
                  href="/posts?authors={{ $posts[0]->user->username }}"
                  class="text-decoration-none">{{ $posts[0]->user->name }}</a> <span
                  class="text-lowercase">{{ $posts[0]->created_at->diffForHumans() }}</span></small>

              <p class="card-text">{{ Str::substr($post->excerpt, 0, 150) . '...' }}</p>

              <a href="/posts/{{ $post->slug }}" class="btn btn-primary text-decoration-none">Read More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="text-center fs-4">No Post Found.</p>
      </div>
    </div>
  @endif
@endsection
