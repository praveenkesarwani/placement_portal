<?php
require '../includes/config.inc.php';
$user = $_SESSION['email'];
$sql2 = "select * FROM studentinfo where email = '$user'";
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);

?>
<html>

<head>
	<title>Profile Page</title>

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
		<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
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
					<li class="nav-item">
						<a class="nav-link" href="home.php">
							<i class="fa fa-home"></i>
							Home
							<span class="sr-only">(current)</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="fa fa-envelope">
							</i>
							Messages
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
						<a class="nav-link " href="#">
							<i class="fa fa-bell"></i>
							Notice
						</a>
					</li>

					<li class="nav-item ">
						<a class="nav-link active" href="#">
							<i class="fa fa-user"></i>
							<?php echo $rows['college_id']; ?>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="../includes/logout.inc.php">
							<i class="fa fa-sign-out"></i>
							Logout
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<!--contents-->
	<div class="container-fluid contact content">
		<div class="row">
			<div class='col-md-3 col-xs-12' id='leftstrip'>
				<div class="col-md">
					<img src="..\img\logo.png" alt="Logo" id="footer-logo">
					<p><br>
						Directorate of Placement and Counselling, G.B.P.U.A.T Pantnagar.
					</p>
				</div>
			</div>
			<div class='col-md-9 col-xs-12'>
				<h2 class="heading mb-sm-6 " id="profile-heading"> <b>My Profile</b></h2><br>
				<div class="container">
					<table class="table table-hover">
						<thead id="table-td">
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Gender</th>
								<th>Discipline</th>
								<th>College Name</th>
							</tr>
						</thead>
						<tbody>
							<?php
							echo "
									<td>{$rows['firstname']}</td>
									<td>{$rows['lastname']}</td>
									<td>{$rows['gender']}</td>
									<td>{$rows['discipline']}</td>
									<td>{$rows['college']}</td>
									</tr>\n";
							?>
						</tbody>
						<thead id="table-td">
							<tr>
								<th>College ID</th>
								<th>Email ID</th>
								<th>Contact No</th>
								<th>Date Of Birth</th>
								<th>Branch</th>
							</tr>
						</thead>
						<tbody>
							<?php
							echo "<tr>
							<td>{$rows['college_id']}</td>
							<td>{$rows['email']}</td>
							<td>{$rows['contact']}</td>
							<td>{$rows['dob']}</td>
							<td>{$rows['branch']}</td>
									</tr>\n";
							?>
						</tbody>
						<thead id="table-td">
							<tr>
								<th>X-Board</th>
								<th>% or CGPA</th>
								<th>Passing Year</th>
								<th>Division</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							echo "<tr>
							<td>{$rows['x_board']}</td>
							<td>{$rows['x_marks']}</td>
							<td>{$rows['x_year']}</td>
							<td>{$rows['x_division']}</td>
									</tr>\n";
							?>
						</tbody>
						<thead id="table-td">
							<tr>
								<th>XII-Board</th>
								<th>% or CGPA</th>
								<th>Passing Year</th>
								<th>Division</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							echo "<tr>
							<td>{$rows['xii_board']}</td>
							<td>{$rows['xii_marks']}</td>
							<td>{$rows['xii_year']}</td>
							<td>{$rows['xii_division']}</td>
									</tr>\n";
							?>
						</tbody>
						<thead id="table-td">
							<tr>
								<th>Graduation CGPA</th>
								<th>Passing Year</th>
								<th>Division</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							echo "<tr>
							<td>{$rows['cgpa']}</td>
							<td>{$rows['grad_year']}</td>
							<td>{$rows['grad_div']}</td>
									</tr>\n";
							?>
						</tbody>
						<thead id="table-td">
							<tr>
								<th>Future Career Plans</th>
								<th>Practical Training</th>
								<th>Hobbies</th>
								<th>Any other Relevant Info</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							echo "
							<td>{$rows['career']}</td>
							<td>{$rows['training']}</td>
							<td>{$rows['hobbies']}</td>
							<td>{$rows['comment']}</td>
									</tr>\n";
							?>
						</tbody>
					</table><br>
					<form action="../includes/edit.inc.php" method="POST">
						<div class="form-group contact-form text-center">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">EDIT DETAILS</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- footer 
	<footer class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="..\img\logo.png" alt="Logo" id="footer-logo">
						<p><br>
							Directorate of Placement and Counselling, G.B.P.U.A.T<br> Pantnagar.
						</p>
					</div>
					<div class="col-md-4 offset-md-1 ">
						<h3>Contact</h3>
						<p><i class="fas fa-map-marker-alt"></i> Near Registrar Office, Pantnagar</p>
						<p><i class="fas fa-phone"></i> Phone: (+91) 8574124578</p>
						<p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
						<p><i class="fab fa-skype"></i> Skype: you_online</p>
					</div>
					<div class="col-md-4 footer-links">
						<div class="row">
							<div class="col links">
								<h3>Links</h3>
								<p><i class="fa fa-home"></i><a href="home.php">Home</a></p>
								<p><i class="fa fa-envelope"></i><a href="#">Messages</a></p>
								<p><i class="fa fa-users"></i><a href="student-details.php">Student Details</a></p>
								<p><i class="fa fa-bell"></i><a href="#">Notice</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
-->
</body>

</html>