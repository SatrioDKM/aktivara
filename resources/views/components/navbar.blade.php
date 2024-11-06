<!-- File: resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <title>Aktivara</title>
</head>
<body>
    
<!-- Side Navbar (Desktop) -->
<div class="d-none d-lg-block">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid justify-content-md-around">
            <a class="navbar-brand {{ request()->is('home') ? 'active' : '' }}" href="/home">
                <i class="bi bi-house"></i> Dashboard
            </a>
            <a class="navbar-brand {{ request()->is('activities') ? 'active' : '' }}" href="/activities">
                <i class="bi bi-file-earmark-text"></i> Laporan
            <a class="navbar-brand {{ request()->is('assets') ? 'active' : '' }}" href="/assets">
                <i class="bi bi-box"></i> Aset
            </a>
            <a class="navbar-brand {{ request()->is('notification') ? 'active' : '' }}" href="/notification">
                <i class="bi bi-bell"></i> Notifikasi
            </a>
<div class="dropdown">
      <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-circle"></i> Akun
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item bi bi-person-fill" href="/profil">Profil Saya</a></li>
        <li><a class="dropdown-item bi bi-gear" href="/pengaturan">Pengaturan</a></li>
        <li><a class="dropdown-item bi-box-arrow-right" href="/logout">Logout</a></li>
      </ul>
    </div>
    </nav>
</div>

<!-- Bottom Navbar (Mobile) -->
<div class="d-block d-lg-none">
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-bottom">
        <div class="container-fluid justify-content-around">
            <a class="navbar-brand {{ request()->is('home') ? 'active' : '' }}" href="/home">
                <i class="bi bi-house"></i> Dashboard
            </a>
            <a class="navbar-brand {{ request()->is('activities') ? 'active' : '' }}" href="/activities">
                <i class="bi bi-file-earmark-text"></i> Laporan
            </a>
            <a class="navbar-brand {{ request()->is('assets') ? 'active' : '' }}" href="/assets">
                <i class="bi bi-box"></i> Aset
            </a>
            <a class="navbar-brand {{ request()->is('notification') ? 'active' : '' }}" href="/notification">
                <i class="bi bi-bell"></i> Notifikasi
            </a>
           <div class="dropdown dropup">
            <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="bi bi-person-fill"></i> Akun
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item bi bi-person-fill" href="/profil">Profil Saya</a></li>
            <li><a class="dropdown-item bi bi-gear" href="/pengaturan">Pengaturan</a></li>
            <li><a class="dropdown-item bi-box-arrow-right" href="/logout">Logout</a></li>
            </ul>
            </div>
        </div>
    </nav>
</div>
        <div id="content">
            @yield('content')
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
                $('#sidebarCollapse').toggleClass('active');
                $('.navbar-brand').toggleClass('active');
            });
        });
    </script>
</body>
</html>