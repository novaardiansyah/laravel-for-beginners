@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-6 mb-3">
      <h4 class="text-capitalize">Post Categories:</h4>
      <ul class="list-group">
        @foreach ($categories as $category)
          <li class="list-group-item">
            <h5>
              <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
                {{ $category->name }}
              </a>
            </h5>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
