@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>Transaksi</h5>
      <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3 float-end">Tambah Transaksi</a>

      <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col">No Transaksi</th>
            <th scope="col">Nama Paket</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">No HP</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col">Total</th>
            <th scope="col">User</th>
            <th scope="col">Status</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php $no = 1; @endphp
          @foreach($pelanggans as $pel)
          <tr>
            <th class="text-center">{{ $no++ }}</th>
            <td>{{ $pel->no_pelanggan }}</td>
            <td>{{ $pel->golongan->nama }}</td>
            <td>{{ $pel->harga }}</td>
            <td>{{ $pel->jumlah }}</td>
            <td>{{ $pel->nama }}</td>
            <td>{{ $pel->no_hp }}</td>
            <td>{{ $pel->tgl_trs }}</td>
            <td>{{ $pel->total }}</td>
            <td>{{ $pel->user->nama }}</td>
            <td>{{ $pel->status }}</td>
            <td class="text-center">
              <a class="btn btn-primary btn-sm" href="{{ route('pelanggan.edit', $pel->id) }}">Edit</a>
              <a class="btn btn-danger btn-sm" href="#" data-id="{{ $pel->id }}" onclick="delete_(`{{ route('pelanggan.delete', $pel->id) }}`)">Delete</a>
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
