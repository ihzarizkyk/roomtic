<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>{{ $title }}</title>
</head>
<body>

<nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand me-auto" href="#">Dashboard</a>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Roomtic</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link fw-bold" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">User</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/room">Room</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tools</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">Log Out</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li> -->
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        </div>
    </div>
    </nav>


    <div class="container my-5">


    <div class="row">
        <div class="col-md-4">
        <!-- 1 of 2 -->
            <div class="card mx-4 my-3" style="width: 18rem;">
            <div class="card-body">
            <img src="{{ asset('img\statistic.png') }}" class="card-img-top" alt="...">
                <p class="card-text d-flex justify-content-center">Statistic</p>
            </div>
            </div>
            <div class="card mx-4 my-3" style="width: 18rem;">
            <div class="card-body">
            <img src="{{ asset('img\statistic.png') }}" class="card-img-top" alt="...">
                <p class="card-text d-flex justify-content-center">Statistic</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card mx-4 my-3" style="width: 18rem;">
            
            <div class="card-body">
            <img src="{{ asset('img\statistic.png') }}" class="card-img-top" alt="...">
                <p class="card-text d-flex justify-content-center">Statistic</p>
            </div>
            </div>
            <div class="card mx-4 my-3" style="width: 18rem;">
            <div class="card-body">
            <img src="{{ asset('img\statistic.png') }}" class="card-img-top" alt="...">
                <p class="card-text d-flex justify-content-center">Statistic</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
        <!-- 2 of 2 -->
                <h1>
                History
            </h1>

                <ul class="list-group">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
            </ul>
        </div>
    </div>

    </div>
     

    

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>