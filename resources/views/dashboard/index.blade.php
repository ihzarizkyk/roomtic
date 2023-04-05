@extends('dashboard.layouts.menu')
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

    @section('sidebar')


    @section('content')
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
                History Rent
            </h1>

                <ul class="list-group">
            <li class="list-group-item">John Doe Rent Room KTT 1.23</li>
            <li class="list-group-item">Anon Rent Room KTT 1.06</li>
            <li class="list-group-item">John Doe Rent Assets (Cable)</li>
            </ul>
        </div>
    </div>

    </div>
    @endsection

    

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>