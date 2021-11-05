@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="text-capitalize">create category</h2>
  </div>

  <div class="row pb-4">
    <div class="col-md-8">
      <div class="card shadow-md py-2">
        <div class="card-body">
          <form action="/dashboard/categories" method="POST" autocomplete="off">
            @csrf
            <div class="mb-4">
              <label for="name" class="form-label">Category Name <span class="text-danger h6">*</span></label>
              <input type="text" class="form-control slug-keyword @error('name') is-invalid @enderror" id="name"
                name="name" placeholder="find something cool?" value="{{ old('name') }}" required />
              @error('name')
                <div class="invalid-feedback pt-2 h6">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-4">
              <label for="slug" class="form-label">Slug <span class="text-danger h6">*</span></label>
              <input type="text" class="form-control generate-slug @error('slug') is-invalid @enderror" id="slug"
                name="slug" placeholder="find-something-cool?" value="{{ old('slug') }}" required />
              @error('slug')
                <div class="invalid-feedback pt-2 h6">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Category</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
