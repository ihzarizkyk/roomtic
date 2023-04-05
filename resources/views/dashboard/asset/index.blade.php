@extends('dashboard.layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>{{ $titles }} - Dasboard RoomTic</title>
</head>
<body>
@section('sidebar')

@section('content')
    <div class="container-fluid my-5">
        
            <a href="{{ route('asset.create') }}" class="btn btn-md btn-primary my-5">
                Create New Asset
            </a>


        
    </div>
@endsection


<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>