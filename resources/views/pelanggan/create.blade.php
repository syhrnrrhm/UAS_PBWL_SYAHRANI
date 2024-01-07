@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h5>Tambah Transaksi</h5>
      <form class="mt-4" action="" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group mb-3">
              <label for="id_gol" class="form-label">Nama Paket</label>
              <select class="form-control @error('id_gol') is-invalid @enderror" name="id_gol" id="id_gol">
              <option value="">-- Pilih --</option>  
              @foreach($golongans as $golongan)
                <option value="{{ $golongan->id }}">{{ $golongan->nama }}</option>
                @endforeach
              </select>
              @error('id_gol')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" placeholder="Harga">
              @error('harga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="jumlah" class="form-label">Jumlah</label>
              <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" id="jumlah" placeholder="Jumlah">
              @error('jumlah')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="nama" class="form-label">Nama Customer</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama Customer">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="no_hp" class="form-label">No Hp</label>
              <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" placeholder="No HP">
              @error('no_hp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="tgl_trs" class="form-label">Tanggal Transaksi</label>
              <input type="date" class="form-control @error('tgl_trs') is-invalid @enderror" name="tgl_trs" id="tgl_trs" placeholder="Tanggal Transaksi">
              @error('tgl_trs')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="total" class="form-label">Total</label>
              <input type="text" class="form-control @error('total') is-invalid @enderror" name="total" id="total" placeholder="Total">
              @error('total')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label for="id_user" class="form-label">User</label>
              <select class="form-control @error('id_user') is-invalid @enderror" name="id_user" id="id_user">
                <option value="">-- Pilih --</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->nama }}</option>
                @endforeach
              </select>
              @error('id_user')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-group mb-3">
              <button class="btn btn-success float-end" type="submit">Simpan</button>
            </div>
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
