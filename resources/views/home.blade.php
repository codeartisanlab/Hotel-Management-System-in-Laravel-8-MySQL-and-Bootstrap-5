<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="{{asset('public/bs5/bootstrap.min.css')}}" rel="stylesheet" />
	<script type="text/javascript" src="{{asset('public/bs5/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <div class="container">
	    <a class="navbar-brand" href="#">A Hotel</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav ms-auto">
	        <a class="nav-link" aria-current="page" href="#">Services</a>
	        <a class="nav-link" href="#">Gallery</a>
	        <a class="nav-link btn btn-sm btn-danger" href="#">Booking</a>
	      </div>
	    </div>
	  </div>
	</nav>
	<!-- Slider Section Start -->
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="{{asset('public/img/banner-1.jpg')}}" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="{{asset('public/img/banner-2.jpg')}}" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="{{asset('public/img/banner-3.jpg')}}" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
	<!-- Slider Section End -->
	<!-- Service Section Start -->
	<div class="container my-4">
		<h1 class="text-center border-bottom">Services</h1>
		<div class="row my-4">
			<div class="col-md-4">
				<img src="{{asset('public/img/ak.jpg')}}" class="img-thumbnail" alt="...">
			</div>
			<div class="col-md-8">
				<h3>Service Heading</h3>
				<p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
				<p>
					<a href="#" class="btn btn-primary">Read More</a>
				</p>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-md-4">
				<img src="{{asset('public/img/pc.jpg')}}" class="img-thumbnail" alt="...">
			</div>
			<div class="col-md-8">
				<h3>Service Heading</h3>
				<p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
				<p>
					<a href="#" class="btn btn-primary">Read More</a>
				</p>
			</div>
		</div>
	</div>
	<!-- Service Section End -->
	<!-- Gallery Section Start -->
	<div class="container my-4">
		<h1 class="text-center border-bottom">Gallery</h1>
		<div class="row my-4">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<p class="card-title"><a href="#">Room Type 1 Gallery</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<p class="card-title"><a href="#">Room Type 2 Gallery</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<p class="card-title"><a href="#">Room Type 3 Gallery</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<p class="card-title"><a href="#">Room Type 4 Gallery</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery Section End -->
</body>
</html>