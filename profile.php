<?php
require 'includes/config.inc.php';
$user = $_SESSION['email'];
$sql2 = "select * FROM studentinfo where email = '$user'";
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);

?>
<html>

<head>
	<title>Student Profile</title>

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
						<ul class="dropdown-menu agile_short_dropdown " style="padding:4px;">
							<li>
								<a href="profile.php" style="color:black; ">My Profile</a>
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
	<div class="container-fluid contact">
		<form action="includes/edit.inc.php" method="POST">
			<div class="row" id='SI1'>
				<div class="col-md-3" id='leftstrip'>
					<div class="contact-info">
						<div class="d-flex justify-content-center">
							<img src="img\logo.png" class="brand_logo" alt="Logo">
						</div>
						<h3>Hi,<?php echo $rows['firstname']." ". $rows['lastname'] ?>!</h3>
						
					</div>
				</div>

				<div class="col-md-9">
					<div class="contact-form">
						<div class="form-group">
							<label class="control-label col-sm-4" for="fname">First Name:</label>
							<div class="col-sm-10">
								<div id="fname" name="fname"><?php echo $rows['firstname']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="lname">Last Name:</label>
							<div class="col-sm-10">
								<div id="lname" name="lname"><?php echo $rows['lastname']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="college">College:</label>
							<div class='col-sm-10'>
								<div id="college" name='college'><?php echo $rows['college']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="gender">Gender:</label>
							<div class='col-sm-10'>
								<div id="gender" name='gender'><?php echo $rows['gender']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Discipline</label>
							<div class='col-sm-10'>
								<div name="discipline"><?php echo $rows['discipline']; ?></div>
							</div>
						</div><!-- if btech is selected -->
						<div class="form-group" id='branch'>
							<label class="control-label col-sm-2" for="branch">Branch</label>
							<div class='col-sm-10'>
								<div name='branch'> <?php echo $rows['branch']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="collid">College Id:</label>
							<div class="col-sm-10">
								<div name="collid"><?php echo $rows['college_id']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-10">
								<div name="email"><?php echo $rows['email']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="contact">Contact:</label>
							<div class="col-sm-10">
								<div name="contact"><?php echo $rows['contact']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="dob">Date of Birth:</label>
							<div class="col-sm-10">
								<div name="dob"><?php echo $rows['dob']; ?></div>
							</div>
						</div><br>
						<div class="form-group">
							<label class="control-label col-sm-4"><u><b>Academics</b></u></label><br><br>
							<label class="control-label col-sm-6" for="xboard">X-board</label>
							<div class='col-sm-10'>
								<div name='xboard'><?php echo $rows['x_board']; ?></div>
							</div>
							<label class="control-label col-sm-4" for="xmarks">Percentage</label>
							<div class="col-sm-10">
								<div name="xmarks"><?php echo $rows['x_marks']; ?></div>
							</div>
							<label class="control-label col-sm-4" for="xpass">Passing Year</label>
							<div class="col-sm-10">
								<div name="xpass"><?php echo $rows['x_year']; ?></div>
							</div>
							<label class="control-label col-sm-6" for="xdivision">Division</label>
							<div class='col-sm-10'>
								<div name='xdivision'><?php echo $rows['x_division']; ?></div>
							</div>

						</div>
						<br>
						<div class="form-group">
							<label class="control-label col-sm-6" for="xiiboard">XII-board</label>
							<div class='col-sm-10'>
								<div name='xiiboard'><?php echo $rows['xii_board']; ?></div>
							</div>
							<label class="control-label col-sm-4" for="xiimarks">Percentage</label>
							<div class="col-sm-10">
								<div name="xiimarks"><?php echo $rows['xii_marks']; ?></div>
							</div>
							<label class="control-label col-sm-4" for="xiipass">Passing Year</label>
							<div class="col-sm-10">
								<div name="xiipass"><?php echo $rows['xii_year']; ?></div>
							</div>
							<label class="control-label col-sm-6" for="xiidivision">Division</label>
							<div class='col-sm-10'>
								<div name='xiidivision'><?php echo $rows['xii_division']; ?></div>
							</div>

						</div>
						<br>
						<div class="form-group">
							<label class="control-label col-sm-6" for="gmarks">Graduation C.G.P.A.</label>
							<div class="col-sm-10">
								<div name="gmarks"><?php echo $rows['cgpa']; ?></div>
							</div>
							<label class="control-label col-sm-4" for="gpass">Passing Year</label>
							<div class="col-sm-10">
								<div name="gpass"><?php echo $rows['grad_year']; ?></div>
							</div>
							<label class="control-label col-sm-6" for="gdivision">Division</label>
							<div class='col-sm-10'>
								<div name='gdivision'><?php echo $rows['grad_div']; ?></div>
							</div>

						</div>
						<div class="form-group" id='career'>
							<label class="control-label col-sm-4" for="career">Future Career Plans</label>
							<div class='col-sm-10'>
								<div name='career'><?php echo $rows['career']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-6" for="training">About Practical Training</label>
							<div class="col-sm-10">
								<div name='training'><?php echo $rows['training']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-6" for="hobbies">Hobbies</label>
							<div class="col-sm-10">
								<div name='hobbies'><?php echo $rows['hobbies']; ?></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-6" for="comment">Any other Relevant Information:</label>
							<div class="col-sm-10">
								<div name='comment'><?php echo $rows['comment']; ?></div>
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">EDIT DETAILS</button>
							</div>
						</div>
					</div>
				</div>

			</div>
		</form>
	</div>
</body>

</html>