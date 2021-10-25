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

              <form action="/login" method="POST" autocomplete="off">
                <div class="mb-4">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" />
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" />
                </div>
                <div class="mb-4">
                  <label for="confirmPassword" class="form-label">Confirm Password</label>
                  <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" />
                </div>

                <div class="text-center mb-4">
                  <button class="btn btn-cprimary">
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
