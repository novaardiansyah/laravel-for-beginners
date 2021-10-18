@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h4 class="text-capitalize mb-3">Post Categories:</h4>
    </div>
  </div>

  <div class="row justify-content-center">
    @foreach ($categories as $category)
      <div class="col-md-4 mb-3">
        <a href="/posts?category={{ $category->slug }}">
          <div class="card bg-dark text-white">
            <img src="https://source.unsplash.com/480x480?{{ $category->name }}" class="card-img"
              alt="{{ $category->name }}">

            <div class="card-img-overlay p-0 d-flex align-items-center">
              <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.7)">
                {{ $category->name }}</h5>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
@endsection
