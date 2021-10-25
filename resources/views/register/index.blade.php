@extends('layouts.main')

@section('container')
  <div class="row justify-content-center mt-3 pb-5">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center mt-4">
            <div class="col-10">
              <h1>Register</h1>
              <p class="text-muted">Just a few more steps before it gets better.</p>
            </div>
          </div>

          <div class="row justify-content-center mt-4">
            <div class="col-10">

              <form action="/register" method="POST" autocomplete="off">
                @csrf
                <div class="mb-4">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" name="name" class="form-control py-2 px-3 @error('name') is-invalid @enderror"
                    id="name" placeholder="your name" required />
                  @error('name')
                    <div class="invalid-feedback pt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-4">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" name="username"
                    class="form-control py-2 px-3 @error('username') is-invalid @enderror" id="username"
                    placeholder="name123" required />
                  @error('username')
                    <div class="invalid-feedback pt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-4">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control py-2 px-3 @error('email') is-invalid @enderror"
                    id="email" placeholder="email@example.com" required />
                  @error('email')
                    <div class="invalid-feedback pt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password"
                    class="form-control py-2 px-3 @error('password') is-invalid @enderror" id="password"
                    placeholder="your password" required />
                  @error('password')
                    <div class="invalid-feedback pt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-4">
                  <label for="confirmPassword" class="form-label">Confirm Password</label>
                  <input type="password" name="confirmPassword"
                    class="form-control py-2 px-3 @error('confirmPassword') is-invalid @enderror" id="confirmPassword"
                    placeholder="re-enter your password" required />
                  @error('confirmPassword')
                    <div class="invalid-feedback pt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="text-center mb-4">
                  <button type="submit" class="btn btn-cprimary">
                    <i class="bi bi-box-arrow-in-right h5"></i>
                    Register
                  </button>
                </div>

                <div class="text-center mb-4">
                  <p style="color: #5138ee;">Already have an account? <a href="/login" class="text-decoration-none"
                      style="color: #7964ff;">Login now</a>.</p>
                </div>
              </form>
            </div>
          </div>

        </div>
        {{-- /.card-body --}}
      </div>
    </div>
  </div>
@endsection
