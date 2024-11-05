<!-- File: resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <title>Aktivara</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-blue fixed-top">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="ms-auto">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="wrapper d-flex">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Dashboard</h3>
            </div>
            <div>
                <ul class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A second item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A third item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A fourth item</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">And a fifth one</a>
                </ul>
            </div>
        </nav>

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