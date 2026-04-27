<!DOCTYPE html>
<html>

<head>
    <title>Toko Online - {{ $judul }}</title>
</head>

<body>
    <nav>
        <a href="{{ route('backend.beranda') }}">Beranda</a> |
        <a href="#">Data User</a>
    </nav>

    <hr>

    <div class="content">
        @yield('isi')
    </div>

    <hr>
    <footer>Copyright &copy; 2026 Toko Online</footer>
</body>

</html>