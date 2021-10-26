@extends('layouts.main')

@section('container')
  <div class="row justify-content-center mt-3 pb-5">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center mt-4">
            <div class="col-10">
              <h1>Login</h1>
              <p class="text-muted">Login with one of following options.</p>

              @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3 mb-0" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
            </div>
          </div>

          <div class="row justify-content-center mt-4">
            <div class="col-10 text-center">
              <button class="btn btn-addons mb-3">
                <i class="bi bi-github h5"></i>
                Login with GitHub
              </button>
              <button class="btn btn-addons mb-3">
                <i class="bi bi-google h5"></i>
                Login with google
              </button>

              <p class="text-muted or-line">
                or
              </p>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-10">

              <form action="/login" method="POST" autocomplete="off">
                <div class="mb-4">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" />
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" />
                </div>

                <div class="text-end mb-4">
                  <p style="color: #5138ee;">Forget Password?</p>
                </div>

                <div class="text-center mb-4">
                  <button class="btn btn-cprimary">
                    <i class="bi bi-box-arrow-in-left h5"></i>
                    Login
                  </button>
                </div>

                <div class="text-center mb-4">
                  <p style="color: #5138ee;">Not registered? <a href="/register" class="text-decoration-none"
                      style="color: #7964ff;">Register now</a>.</p>
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
