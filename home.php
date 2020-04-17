<?php
require 'includes/config.inc.php';
$user = $_SESSION['email'];
$sql2 = "select * FROM studentinfo where email = '$user'";
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);

?>
<html>

<head>
	<title>Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">

	<!-- css-->
	<link rel="stylesheet" href="css\style.css">
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
</head>

<body>
	<!--Header-->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<h1><a class="navbar-brand" href="home.php">Placement-Portal <span class="display"></span></a></h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style=" font-size:18px; ">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item ">
						<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Hostels</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Message_Received</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $rows['college_id']; ?>
						</a>
						<ul class="dropdown-menu agile_short_dropdown " style="padding:4px; color:black;">
							<li>
								<a href="profile.php" style="color:black;">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php" style="color:black;">Logout</a>
							</li>
						</ul>
					</li>
				</ul>
				</li>
				</ul>
			</div>
		</nav>
	</header>
	<!--header-->
	<!--Contents-->
	<div class="container-fluid contact">
		<form action="includes/edit.inc.php" method="POST">
			<div class="row" id='SI1'>
				<div class="col-md-3" id='leftstrip'>
					<div class="contact-info">
						<div class="d-flex justify-content-center">
							<img src="img\logo.png" class="brand_logo" alt="Logo">
						</div>
						<h3>Hi,<?php echo $rows['firstname']." ".$rows['lastname'] ?>!</h3>
					</div>
				</div>
				<div class="col-md-9">
					<div class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
						<div class="visible">
							<div class="svg-wrapper">
								<svg viewBox="0 0 1400 800">
									<title>COT Pantnagar</title>
									<defs>
										<clipPath id="cd-image-1">
											<circle id="cd-circle-1" cx="110" cy="400" r="1364" />
										</clipPath>
									</defs>
									<image height='970px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="img/cot.png"></image>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!--contents-->
	<!--footer
	<footer>
		<div class="mt-5 pt-5 pb-5 footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-xs-12 about-company">
						<h2>Heading</h2>
						<p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
						<p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
					</div>
					<div class="col-lg-3 col-xs-12 links">
						<h4 class="mt-lg-0 mt-sm-3">Links</h4>
						<ul class="m-0 p-0">
							<li>- <a href="#">Lorem ipsum</a></li>
							<li>- <a href="#">Nam mauris velit</a></li>
							<li>- <a href="#">Etiam vitae mauris</a></li>
							<li>- <a href="#">Fusce scelerisque</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-xs-12 location">
						<h4 class="mt-lg-0 mt-sm-4">Location</h4>
						<p>22, Lorem ipsum dolor, consectetur adipiscing</p>
						<p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
						<p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	footer-->
</body>

</html>