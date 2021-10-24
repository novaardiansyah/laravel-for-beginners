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

              <form action="/login" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" autofocus />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" autofocus />
                </div>

                <div class="text-end mb-3 mt-4">
                  <p style="color: #5138ee;">Forget Password?</p>
                </div>

                <div class="text-center">
                  <button class="btn btn-cprimary mb-3">
                    <i class="bi bi-box-arrow-in-left h5"></i>
                    Login Now
                  </button>
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
