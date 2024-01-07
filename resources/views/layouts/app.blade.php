<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <title>{{ $title }} - {{ config('app.name') }}</title>
  @stack('css')
  <style>
    body {
      background-color: #e8e8e8;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: #27b5c4; /* Warna latar belakang navbar */
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan navbar */
    }

    .navbar-brand {
      font-weight: bold;
      color: #ffffff; /* Warna teks brand */
    }

    .navbar-nav .nav-link {
      color: #ffffff; /* Warna teks link navbar */
    }

    .navbar-nav .nav-link:hover {
      color: #030303; /* Warna teks link navbar saat dihover */
    }

    .navbar-nav .nav-link.active {
      font-weight: bold;
      color: #030303; /* Warna teks link navbar saat aktif */
    }

    .dropdown-menu {
      background-color: #27b5c4; /* Warna latar belakang dropdown menu */
    }

    .dropdown-item {
      color: #ffffff; /* Warna teks dropdown item */
    }

    .dropdown-item:hover {
      background-color: #27b5c4; /* Warna latar belakang dropdown item saat dihover */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container" style="font-family: 'Monaco', monaco;  font-size: 20px;">
      <a class="navbar-brand" style="font-family: 'Monaco', monaco;  font-size: 30px; href="{{ route('home') }}">Rani,s DreamStream</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title == 'User' ? 'active' : '' }}" href="{{ route('user') }}">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title == 'Golongan' ? 'active' : '' }}" href="{{ route('golongan') }}">Jenis Paket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title == 'Pelanggan' ? 'active' : '' }}" href="{{ route('pelanggan') }}">Transaksi</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ auth()->user()->nama }}</a>
            <div class="dropdown-menu">
              <a href="javascript:void(0);" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="py-4">
    @yield('content')
  </main>

  <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
    @csrf
  </form>

  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  @stack('js')
</body>

</html>
