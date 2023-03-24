<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Dashboard - RoomTic</title>
</head>
<body>

    <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <h5 class="text-white h4">Dashboard</h5>
        <h5 class="text-white h4">User</h5>
        <h5 class="text-white h4">Room</h5>
        <h5 class="text-white h4">Asset</h5>
        <h5 class="text-white h4">LogOut</h5>
        <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    </nav>

    <div class="container">
    <div class="row">
        <div class="col-md-4">
        <!-- 1 of 2 -->
            <div class="card mx-4 my-3" style="width: 18rem;">
            
            <div class="card-body">
            <img src="{{ asset('img\statistic.png') }}" class="card-img-top" alt="...">
                <p class="card-text">Statistic</p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card mx-4 my-3" style="width: 18rem;">
            
            <div class="card-body">
            <img src="{{ asset('img\statistic.png') }}" class="card-img-top" alt="...">
                <p class="card-text">Statistic</p>
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