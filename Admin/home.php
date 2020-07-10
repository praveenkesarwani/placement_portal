<?php
require '../includes/config.inc.php';
$user = $_SESSION['admin'];
if(!$user==true){
    header("Location:../index.php?error=strangeerr");
}
$sql2 = "select * FROM studentinfo where email = '$user'";
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);

?>
<html>

<head>
	<title>Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

	<!-- css-->
	<link rel="stylesheet" href="..\css\style.css">
	<!-- css-->
	<!--bootstrap css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--bootstrap css-->

	<!--bootstrap js-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<!--bootstrap js-->
	<!--Font Awesome-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
	<!--Header-->
	<header>
		<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark ">
			<h1>
				<a class="navbar-brand" href="home.php" id="navbar-logo">
					<img src="..\img\logo.png" alt="Logo" id="nav-logo">
					<span class="display"></span></a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style=" font-size:18px; ">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">
							<i class="fa fa-home"></i>
							Home
							<span class="sr-only">(current)</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="resume.php">
							<i class="fa fa-file">
							</i>
							Resume
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="student-details.php">
							<i class="fa fa-users">
							</i>
							Student Details
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link " href="../includes/logout.inc.php">
							<i class="fa fa-sign-out"></i>
							Logout
						</a>
					</li>
				</ul>
				</li>
				</ul>
			</div>
		</nav>
	</header>

	<!--Contents-->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="../img/bg1.jpg" alt="First slide" height="700px">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../img/bg2.jpg" alt="Second slide" height="700px">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../img/bg3.png" alt="Third slide" height="700px">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- footer -->
	<section id="myfooter">

		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<img src="..\img\logo.png" alt="Logo" id="footer-logo">
								<br><br>
								Directorate of Placement and Counselling, G.B.P.U.A.T<br> Pantnagar.
								<br> <br>
							</div>
							<div class="col-lg-4">
								<h3>Contact</h3>
								<p><i class="fas fa-map-marker-alt"></i> Near Registrar Office, Pantnagar</p>
								<p><i class="fas fa-phone"></i> Phone: (+91) 8574124578</p>
								<p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
								<p><i class="fab fa-skype"></i> Skype: you_online</p>
								<br><br>
							</div>
							<div class="col-lg-4">
								<h3>Links</h3>
								<p><i class="fa fa-home"></i> <a href="home.php">Home</a></p>
								<p><i class="fa fa-file"></i> <a href="resume.php">Resume</a></p>
								<p><i class="fa fa-users"></i> <a href="student-details.php">Student Details</a></p>
								<br><br>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="container">
						<div class="row">
							<div class="col-lg-12" style="text-align: justify;">
								<h3>ABOUT US!</h3> It is a placement cell portal for GB pant university of Agriculture & Technology.
								Now you can find all student's details through this web portal.

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

</body>

</html>