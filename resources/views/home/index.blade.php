@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body" style="background-color: #f8f9fa; color: #333; border: none; box-shadow: 0 4px 8px rgba(0,0,0,0.1); padding: 20px; border-radius: 8px; font-family: 'Monaco', monaco;">
      <h5 style="margin-bottom: 20px; text-align: center; color: #0c0c0d;">HOME</h5>

      <div style="text-align: center;">
        <img src="{{ asset('icons/admin.png') }}" alt="Profile Picture" style="border-radius: 50%; border: 4px solid #27b5c4; margin-bottom: 15px; width: 150px; height: 150px;">
        <p style="font-size: 20px; ">Halo,  <strong>{{ auth()->user()->nama }}</strong>. Selamat Datang</p>
      </div>
    </div>
  </div>
</div>
@endsection
