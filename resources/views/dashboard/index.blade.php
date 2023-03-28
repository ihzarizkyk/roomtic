<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Dashboard - RoomTic</title>
</head>
<body>

    <div class="container">

    <a href="/logout" class="btn btn-md btn-danger">
        Logout
    </a>

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