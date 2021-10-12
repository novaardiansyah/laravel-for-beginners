@extends('layouts.main')

@section('container')
  <div class="row">
    <div class="col-lg-8">
      <ul class="list-group">
        <li class="list-group-item">Full Name: {{ $name }}</li>
        <li class="list-group-item">Email: {{ $email }}</li>
        <li class="list-group-item">
          Profile:
          <img src="img\{{ $picture }}" alt="{{ $name }}" width="40" class="rounded-circle">
        </li>
      </ul>
    </div>
  </div>
@endsection
