@extends('dashboard.layouts.menu')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<title>{{ $titles }} - Dashboard RoomTic</title>
</head>
<body>
@section('sidebar')

@section('content')
	<div class="container mt-3">
		<div class="row mt-3 d-flex justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="card p-5 mb-4 mt-4 bg-light rounded-3">
					<div class="card-header">
						RoomTic
					</div>
					<div class="card-body">

						<h1 class="fs-1 fw-bold my-3">
							{{ $titles }}
						</h1>

						<form class="form" action="/postAsset" method="POST">
							@csrf
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="code" required>
								<label for="floatingInput"><i class="bi bi-person-vcard-fill"></i> Code</label>
							</div>

							@error('code')
							<p class="text-danger">
								{{ $message }}
							</p>
							@enderror

							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="name" value="{{ old('name') }}" required>
								<label for="floatingInput"><i class="bi bi-person"></i> Asset Name </label>
							</div>

							@error('name')
							<p class="text-danger">
								{{ $message }}
							</p>
							@enderror


							<div class="form-floating mb-3">
								<textarea class="form-control" name="desc" rows="30" cols="30" required>{{ old('desc') }}</textarea><label for="floatingInput"><i class="bi bi-person-vcard-fill"></i> Description</label>
							</div>

							@error('desc')
							<p class="text-danger">
								{{ $message }}
							</p>
							@enderror

							<div class="form-floating mb-3">
								<input type="date" class="form-control" id="floatingInput" name="startBook" required>
								<label for="floatingInput"><i class="bi bi-person-vcard-fill"></i> StartBook</label>
							</div>

							@error('startBook')
							<p class="text-danger">
								{{ $message }}
							</p>
							@enderror

							<div class="form-floating mb-3">
								<input type="date" class="form-control" id="floatingInput" name="endBook" required>
								<label for="floatingInput"><i class="bi bi-person-vcard-fill"></i> EndBook</label>
							</div>

							@error('endBook')
							<p class="text-danger">
								{{ $message }}
							</p>
							@enderror

							<div class="form-group mt-3">	
							    <input class="btn btn-md btn-success" name="save" type="submit" value="Create">
							</div>

							<a href="{{ route('dashboard.asset') }}" class="btn btn-dark btn-md d-flex justify-content-center mt-3">
								Back to Asset
							</a>

						</form>
					</div>
				</div>

			</div>
		</div>
			</div>
@endsection


<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>