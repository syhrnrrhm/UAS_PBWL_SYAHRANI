@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>{{ $title }}</h5>
      <a href="{{ route('user.create') }}" class="btn btn-primary mb-3 float-end">Tambah User</a>

      <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col">Email</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Kode Pos</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php $no = 1; @endphp
          @foreach($users as $user)
          <tr>
            <th class="text-center">{{ $no++ }}</th>
            <td>{{ $user->email }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->alamat }}</td>
            <td>{{ $user->no_hp }}</td>
            <td>{{ $user->kode_pos }}</td>
            <td>{{ $user->role ? 'Admin1' : 'Admin2' }}</td>
            <td>{{ $user->status }}</td>
            <td class="text-center">
              <a class="btn btn-primary btn-sm" href="{{ route('user.edit', $user->id) }}">Edit</a>
              <a class="btn btn-danger btn-sm" href="#" data-id="{{ $user->id }}" onclick="delete_(`{{ route('user.delete', $user->id) }}`)">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@push('css')
<style>
  body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
    margin-top: 20px;
  }

  .card {
    border: none;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }

  .card-body {
    color: #333;
  }

  .table th,
  .table td {
    vertical-align: middle;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }

  .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }

  .btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
  }

  .btn-danger:hover {
    background-color: #c82333;
    border-color: #c82333;
  }
</style>
@endpush

@push('js')
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script>
  function delete_(url) {
    if (confirm('Are you sure?')) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': `{{ csrf_token() }}`
        }
      });

      $.ajax({
        type: "DELETE",
        url: url,
        success: function(result) {
          if (!result) {
            alert('Gagal menghapus data')
          }

          location.reload()
        }
      })
    }
  }
</script>
@endpush
