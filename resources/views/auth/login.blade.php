<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<title>Login - RoomTic</title>
</head>
<body>

<div class="container-fluid">
<div class="card p-5 mb-4 mt-4 bg-light rounded-3">
	<div class="card-body">

		<h1 class="fs-1 fw-bold my-3 mt-2">
			Login - RoomTic
		</h1>

		<form action="#" method="POST">
			<div class="form-floating mb-3">
				<input type="email" class="form-control" id="floatingInput" name="email">
				<label for="floatingInput">Email</label>
			</div>

			<div class="form-floating">
				<input type="password" class="form-control" id="floatingPassword" name="password">
				<label for="floatingPassword">Password</label>
			</div>

			<div class="form-group mt-3">	
			    <input class="btn btn-success btn-sm" type="sumbit" value="Login">

			    <input class="btn btn-danger btn-sm" type="reset" value="Reset">
			</div>
		</form>
	</div>
</div>
</div>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>