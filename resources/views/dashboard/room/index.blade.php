@extends('dashboard.layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>{{ $title }} - Dasboard RoomTic</title>
</head>
<body>
@section('sidebar')

@section('content')
    <div class="container-fluid my-5">
        
        @if(auth()->user()->roles == "admin" && "logistic")
            <a href="{{ route('room.create') }}" class="btn btn-md btn-primary my-5">
                Create New Room
            </a>
        @endif

        <br>
        <br>

        <table class="table table-hover my-5 mt-4" id="room">
            <thead>
            <tr>
                    <th>No</th>
                    <th>Room</th>
                    <th>Capacity</th>
                    <th>Status</th>
                    <th>Code</th>
                    @if(auth()->user()->roles == "admin" && "logistic")
                    <th>Action</th>
                    @endif
                    <th>Detail</th>

            </tr>
            </thead>
            <tbody>

            <tr>
                    <td>1</td>
                    <td>KTT 1.23</td>
                    <td>40</td>
                    <td>
                        <span class="badge bg-secondary">
                            Request Approval
                        </span>
                    </td>
                    <td>1166171611</td>
                    @if(auth()->user()->roles == "admin" && "logisitic")
                    <td>
                        lorem
                    </td>
                    @endif
                    <td>
                        <a href="/dashboard/room/detail" class="btn btn-md btn-primary">Detail</a>
                    </td>
            </tr>

            <tr>
                    <td>2</td>
                    <td>KTT 1.04</td>
                    <td>40</td>
                    <td>
                        <span class="badge bg-danger">
                            Full
                        </span>
                    </td>
                    <td>1166171611</td>
                    @if(auth()->user()->roles == "admin" && "logisitic")
                    <td>
                        lorem
                    </td>
                    @endif
                    <td>
                        <a href="#" class="btn btn-md btn-primary">Detail</a>
                    </td>
            </tr>

            <tr>
                    <td>3</td>
                    <td>KTT 1.05</td>
                    <td>40</td>
                    <td>
                        <span class="badge bg-success">
                            Available
                        </span>
                    </td>
                    <td>1166171611</td>
                    @if(auth()->user()->roles == "admin" && "logisitic")
                    <td>
                        lorem
                    </td>
                    @endif
                    <td>
                        <a href="#" class="btn btn-md btn-primary">Detail</a>
                    </td>
            </tr>
        
            </tbody>
        </table>        
    </div>
@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script>
    $(document).ready( function () {
        $('#room').DataTable();
    } );
</script>
</body>
</html>