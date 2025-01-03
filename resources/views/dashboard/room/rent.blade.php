@extends('dashboard.layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
		<style>
			.input-group-append {
				cursor: pointer;
			}
			body{
				margin:80px !important;
			}
		</style>
    <title>Rent - {{ $title }}</title>
</head>
<body>
    @section('sidebar')

    @section('content')

    <br><br>

            <form class="d-flex my-5">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        </div>
    </div>
    </nav>

        <div class="container">
    <div class="row">
        <div class="col">
        <p class="h4">KTT 1.23</p>

            <div class="card mb-3">
            <img src="{{ asset('img\ruangan1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Description Room</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 7 years ago</small></p>
                </div>
            </div>

        <!-- 1 of 2 -->
        </div>
        <div class="col">
        <p class="h3">Available</p>
            <section>
                <!-- <h3 class="py-2 mb-4">How To Add Bootstrap 5 Datepicker - Techsolutionstuff</h3> -->
                <label for="date" class="col col-form-label">Date</label>

                <form class="row">
                    <div class="col-7">
                    <div class="input-group date" id="datepicker">
                        <input type="text" class="form-control" id="date"/>
                        <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                        </span>
                    </div>
                    </div>
                </form>
            </section>
        <br>
        <a class="btn btn-success btn-lg w-25 " href="#rent">Rent</a>
        <a class="btn btn-primary btn-lg w-25 ms-4" href="/room">Back</a>
        <!-- 2 of 2 -->
        </div>
    </div>
    
    </div>

    @endsection

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
	$(function(){
		$('#datepicker').datepicker();
	});
</script>
</body>
</html>