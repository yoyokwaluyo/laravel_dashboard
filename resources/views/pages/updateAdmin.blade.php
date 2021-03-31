@extends('layouts.master')
@extends('sidebar.dashboard')

@section('content')

<div class="header  pb-6">
    <div class="container-fluid">
      
    </div>
</div>
  <!-- Page content -->
  <div class="container-fluid mt--6 py-5">
    <div class="row">
      <div class="col-xl-10">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Update Admin</h3>
              </div>
            </div>
          </div>
          <div class="container py-4">
            <form method="POST" action="{{ route('updateAdmin') }}">
              @csrf
              <input type="hidden" name="id" value="{{ $show['id'] }}">
              <div class="p-4 bg-secondary">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input id="name" type="text" class="form-control form-control-alternative @error('name') is-invalid @enderror" name="name" value="{{ $show['name'] }}" required>
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control form-control-alternative @error('email') is-invalid @enderror" name="email" value="{{ $show['email'] }}" required>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control form-control-alternative @error('password') is-invalid @enderror" name="password" value="" placeholder="isi jika mau update">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password-confirm">Password Confirm</label>
                  <input id="password-confirm" type="password" class="form-control form-control-alternative" name="password_confirmation" value="" placeholder="isi jika mau update">
                </div>
                <div class="form-group">
                  <button class="btn btn-success" type="submit">Update</button>
                  <button class="btn btn-warning" type="button" onclick="window.location.href='{{ route('admin') }}';">Kembali</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   
@endsection
