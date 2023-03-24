<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<title>Login - RoomTic</title>
</head>
<style>
	body{
		background-color: lightblue;
	}
</style>
<body>

<div class="container-fluid">

<div class="row d-flex justify-content-center">
	<div class="col-md-6">
		<div class="card p-5 mb-4 mt-4 bg-light rounded-3">
			<div class="card-body">

				<h1 class="fs-1 fw-bold my-3 mt-2">
					Login - RoomTic
				</h1>

				<form action="#" method="POST">

					<div class="form-floating mb-3">
						<input type="email" class="form-control" id="floatingInput" name="email">
						<label for="floatingInput"><i class="bi bi-person"></i> Email</label>
					</div>

					<div class="form-floating">
						<input type="password" class="form-control" id="floatingPassword" name="password">
						<label for="floatingPassword"><i class="bi bi-pass-fill"></i> Password</label>
					</div>

					<div class="form-group mt-2">
						<p class="text-secondary">
							You don't have Account? please register <a href="/register">here</a>
						</p>
					</div>

					<div class="form-group mt-3">	
					    <input class="btn btn-success btn-md" name="login" type="submit" value="Login">
					</div>

					<h2 class="fs-2 fw-bold d-flex justify-content-center">
						OR
					</h2>

					<a href="#" class="btn btn-primary btn-md d-flex justify-content-center mb-3">
						<i class="bi bi-google"></i> &nbsp; Login with Google
					</a>

					<a href="/" class="btn btn-dark btn-md d-flex justify-content-center">
						Back Home
					</a>

				</form>
			</div>
		</div>

	</div>
</div>

</div>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>