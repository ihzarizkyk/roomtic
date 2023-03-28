<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<title>Roomtic</title>
</head>

<style>
  html{
    scroll-behavior: smooth;
  }
</style>

<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>RoomTic</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a href="#about" class="nav-link">
            About
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/room">Room</a>
          @auth
          <a class="nav-link" href="/dashboard">Dashboard</a>
          
          @endauth

          @guest
          
          <a class="nav-link" href="/login">Login</a>
          @endguest
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid-lg bg-light">

  <!-- Jumbotron -->
    <div class="p-5 mb-4 bg-light rounded-3" id="about">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">RoomTic</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <a class="btn btn-success btn-lg" href="#featured-3">Get Started</a>
        <a class="btn btn-primary btn-lg" href="https://docs.google.com/forms/d/1YcTRVuud1ukDaQIv6S77MfuZJ7_9GcNnqsa-60UBxyw/edit?usp=sf_link" target="_blank">Try Prototype!</a>
      </div>
    </div>


    <!-- Our Features -->
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Our Features</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <i class="bi bi-door-open-fill mx-2 my-2"></i>
        </div>
        <h3 class="fs-2">Booking Room</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <i class="bi bi-tools mx-2 my-2"></i>
        </div>
        <h3 class="fs-2">Booking Tools</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <i class="bi bi-check-circle-fill mx-2 my-2"></i>
        </div>
        <h3 class="fs-2">Request Approval</h3>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      </div>
    </div>
  </div>

</div>

<script src="js/bootstrap.min.js"></script>	
</body>
</html>