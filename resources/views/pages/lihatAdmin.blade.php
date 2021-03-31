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
                <h3 class="mb-0">Lihat Admin</h3>
              </div>
            </div>
          </div>
          <div class="container py-4">
            <table class="table align-items-center table-flush">
              <tbody>
                <tr>
                  <th scope="row">Nama</th>
                  <td>{{ $show->name }}</td>
                </tr>
                <tr>
                  <th scope="row">Email</th>
                  <td>{{ $show->email }}</td>
                </tr>
                <tr>
                  <th scope="row">Tanggal dibuat</th>
                  <td>{{ $show->created_at }}</td>
                </tr>
                <tr>
                  <td>
                    <button class="btn btn-warning" type="button" style="margin-top:1rem;" onclick="window.location.href='{{ route('admin') }}';">Kembali</button>
                  </td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
@endsection
