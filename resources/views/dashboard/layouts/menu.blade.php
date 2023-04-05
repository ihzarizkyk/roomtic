<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Nav</title>
</head>
<body>
        @yield('sidenav')
    <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand me-auto" href="#">RoomTic</a>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Roomtic</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('dashboard')) ? 'fw-bold' : '' }}" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">User</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('dashboard/room/*') || request()->is('dashboard/room') ) ? 'fw-bold' : '' }}" href="{{ route('dashboard.room') }}">Room</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('dashboard/asset/*') || request()->is('dashboard/asset') ) ? 'fw-bold' : '' }}" href="{{ route('dashboard.asset') }}">Assets</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Log Out</a>
            </li>
            </ul>
            <p class="fw-bold mt-2">
                Hi, {{ auth()->user()->name }} as a {{ auth()->user()->roles }}
            </p>
        </div>
        </div>
    </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>

@yield('script')
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>