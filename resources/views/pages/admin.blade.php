@extends('layouts.master')
@extends('sidebar.dashboard')

@section('styles')
<style>
  .paginations {
    text-align: end;  
  }
  .paginations nav div.hidden {
    margin-top: 1rem;
  }
  .paginations nav div.hidden div:last-child {
    display: none;
  }
</style>
@endsection

@section('content')

<div class="header  pb-6">
    <div class="container-fluid">
      
    </div>
</div>
  <!-- Page content -->
  <div class="container-fluid mt--6 py-4">
    <div class="row">
      <div class="col-xl-10">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Page Admin</h3>
              </div>
              <div class="col text-right">
                <button class="btn btn-icon btn-success btn-sm" type="button" onclick="window.location.href='{{ route('lihatAdmin') }}';">
                  <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                  <span class="btn-inner--text">Tambah</span>
                </button>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <button class="btn btn-icon btn-secondary btn-sm" type="button" onclick="window.location.href='{{ route('showAdmin', ['id'=>$user->id]) }}';">
                        <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
                        <span class="btn-inner--text">Lihat</span>
                      </button>
                      <button class="btn btn-icon btn-info btn-sm" type="button" onclick="window.location.href='{{ route('formUpdate', ['id'=>$user->id]) }}';">
                        <span class="btn-inner--icon"><i class="fas fa-pencil-alt"></i></span>
                        <span class="btn-inner--text">Ubah</span>
                      </button>
                      <form method="POST" action="{{ route('deleteAdmin') }}" onsubmit="return confirm('Yakin mau hapus?');" style="display:unset;">
                        @csrf
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <button class="btn btn-icon btn-danger btn-sm" type="submit">
                          <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                          <span class="btn-inner--text">Hapus</span>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="paginations container py-4">
              {{ $users->links() }}
            </div>   
          </div>
        </div>
      </div>
    </div>
   
@endsection
