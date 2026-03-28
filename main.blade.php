<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nadila Ramadani - Idul Fitri 1447 H')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header / Navigation -->
    <header class="text-center py-3" style="background: linear-gradient(135deg, #2E7D32, #1B5E20);">
        <h1 class="text-white mb-1">Nadila Ramadani</h1>
        <nav class="nav justify-content-center">
            <a class="nav-link text-white {{ request()->routeIs('home') ? 'active-nav' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="nav-link text-white {{ request()->routeIs('profil') ? 'active-nav' : '' }}" href="{{ route('profil') }}">Profil</a>
            <a class="nav-link text-white {{ request()->routeIs('foto') ? 'active-nav' : '' }}" href="{{ route('foto') }}">Foto</a>
            <a class="nav-link text-white {{ request()->routeIs('video') ? 'active-nav' : '' }}" href="{{ route('video') }}">Video</a>
            <a class="nav-link text-white {{ request()->routeIs('cerita') ? 'active-nav' : '' }}" href="{{ route('cerita') }}">Cerita</a>
            <a class="nav-link text-white {{ request()->routeIs('kontak') ? 'active-nav' : '' }}" href="{{ route('kontak') }}">Kontak</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-3 mt-4" style="background: #1B5E20; color: white;">
        <p class="mb-0">&copy; {{ date('Y') }} Nadila Ramadani - Selamat Idul Fitri 1447 H</p>
        <p class="mb-0 small">Mohon Maaf Lahir dan Batin</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>