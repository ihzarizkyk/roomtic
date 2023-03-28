<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Room</title>
    
</head>
<body>
    <br>
        <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand me-auto" href="#">Room</a>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Roomtic</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link " href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">User</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" aria-current="page" href="#">Room</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Assets</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Log Out</a>
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

    <div class="container-fluid bg-light mt-5">
    <div class="container-fluid mb-4 my-5">
    <!-- Content here -->
        <div class="row">
        <div class="col">
        <!-- 1 of 3 -->
        </div>
        <div class="col my-3">
        Ruangan
        <form class="d-flex my-2">
            <input class="form-control mx-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        <!-- 2 of 3 -->
        </div>
        <div class="col">
        <!-- 3 of 3 -->
        </div>
    </div>
    
    </div>
    <div class="row">
    
    <!-- This is a bordered element with a primary color. -->
        <div class="col" >
            <div class="container">
            <div class="row">
                <div class="col align-self-start">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-center">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-end">
                <!-- One of three columns -->
                <div class="form-check">
                <input class="form-check-input" style="width: 50px; height: 50px" type="checkbox" value="" id="flexCheckDefault">

                <label class="form-check-label" for="flexCheckDefault">
                    <!-- Checked checkbox -->
                </label>
            </div>
                </div>
            </div>
            </div>
        <!-- <p>test<span class="border"></span></p> -->
            
        <!-- 1 of 3 -->
        </div>
        <div class="col">
            <div class="alert alert-secondary" role="alert">
            KTT 1.09
            </div>
        <!-- 2 of 3 -->
        </div>
        <div class="col">
        <!-- 3 of 3 -->
        <a class="btn btn-success btn-lg" href="/rent">Rent</a>
        </div>
    </div>
    

    <br>
    <div class="row">
        <div class="col">
        <div class="container">
            <div class="row">
                <div class="col align-self-start">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-center">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-end">
                <!-- One of three columns -->
                <div class="form-check">
                <input class="form-check-input" style="width: 50px; height: 50px" type="checkbox" value="" id="flexCheckDefault">

                <label class="form-check-label" for="flexCheckDefault">
                    <!-- Default checkbox -->
                </label>
            </div>
                </div>
            </div>
            </div>
        <!-- 1 of 3 -->
        </div>
        <div class="col">
            <div class="alert alert-secondary" role="alert">
            KTT 1.10
            </div>
        <!-- 2 of 3 -->
        </div>
        <div class="col">
        <!-- 3 of 3 -->
        <a class="btn btn-success btn-lg" href="/rent">Rent</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
        <div class="container">
            <div class="row">
                <div class="col align-self-start">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-center">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-end">
                <!-- One of three columns -->
                <div class="form-check">
                <input class="form-check-input" style="width: 50px; height: 50px" type="checkbox" value="" id="flexCheckDefault">

                <label class="form-check-label" for="flexCheckDefault">
                    <!-- Default checkbox -->
                </label>
            </div>
                </div>
            </div>
            </div>

            
        <!-- 1 of 3 -->
        </div>
        <div class="col">
            <div class="alert alert-secondary" role="alert">
            KTT 1.11
            </div>
        <!-- 2 of 3 -->
        </div>
        <div class="col">
        <!-- 3 of 3 -->
        <a class="btn btn-success btn-lg" href="/rent">Rent</a>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
        <div class="container">
            <div class="row">
                <div class="col align-self-start">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-center">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-end">
                <!-- One of three columns -->
                <div class="form-check">
                <input class="form-check-input" style="width: 50px; height: 50px" type="checkbox" value="" id="flexCheckDefault">

                <label class="form-check-label" for="flexCheckDefault">
                    <!-- Default checkbox -->
                </label>
            </div>
                </div>
            </div>
            </div>
        <!-- 1 of 3 -->
        </div>
        <div class="col">
            <div class="alert alert-secondary" role="alert">
            KTT 1.12
            </div>
        <!-- 2 of 3 -->
        </div>
        <div class="col">
        <!-- 3 of 3 -->
        <a class="btn btn-success btn-lg" href="/rent">Rent</a>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
        <div class="container">
            <div class="row">
                <div class="col align-self-start">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-center">
                <!-- One of three columns -->
                </div>
                <div class="col align-self-end">
                <!-- One of three columns -->
                <div class="form-check">
                <input class="form-check-input" style="width: 50px; height: 50px" type="checkbox" value="" id="flexCheckDefault">

                <label class="form-check-label" for="flexCheckDefault">
                    <!-- Default checkbox -->
                </label>
            </div>
                </div>
            </div>
            </div>
        <!-- 1 of 3 -->
        </div>
        <div class="col">
            <div class="alert alert-secondary" role="alert">
            KTT 1.13
            </div>
        <!-- 2 of 3 -->
        </div>
        <div class="col">
        <!-- 3 of 3 -->
        <a class="btn btn-success btn-lg" href="/rent">Rent</a>
        </div>
    </div>
    <br>
    </div>
    
    


<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>