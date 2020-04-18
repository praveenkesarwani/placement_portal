<?php
require 'config.inc.php';
$user = $_SESSION['email'];
$sql2 = "select * FROM studentinfo where email = '$user'";
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);

if (!$user == true) {
	header("Location:../index.php?error=strangeerr");
}
if (isset($_POST['update'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$college = $_POST['college'];
	$discipline = $_POST['discipline'];
	$branch = $_POST['branch'];
	$collid = $_POST['collid'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$dob = $_POST['dob'];
	$xboard = $_POST['xboard'];
	$xmarks = $_POST['xmarks'];
	$xpass = $_POST['xpass'];
	$xdivision = $_POST['xdivision'];
	$xiiboard = $_POST['xiiboard'];
	$xiimarks = $_POST['xiimarks'];
	$xiipass = $_POST['xiipass'];
	$xiidivision = $_POST['xiidivision'];
	$gmarks = $_POST['gmarks'];
	$gpass = $_POST['gpass'];
	$gdivision = $_POST['gdivision'];
	$career = $_POST['career'];
	$training = $_POST['training'];
	$hobbies = $_POST['hobbies'];
	$comment = $_POST['comment'];


	$sql = "UPDATE studentinfo SET firstname='$fname',lastname='$lname',gender='$gender',college='$college',discipline='$discipline',branch='$branch',
			college_id='$collid',email='$email',contact='$contact',dob='$dob',x_board='$xboard',x_marks='$xmarks',x_year= '$xpass',
			x_division='$xdivision',xii_board='$xiiboard',xii_marks='$xiimarks',xii_year='$xiipass',xii_division='$xiidivision',cgpa='$gmarks',
			grad_year='$gpass',grad_div='$gdivision',career='$career',training='$training',hobbies='$hobbies',comment='$comment'
			WHERE email = '$user'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location:../users/home.php?updatedInfo=success");
	} else {
		echo "<script>alert('details not updated');window.location = 'edit.inc.php' </script>'";
	}
}
?>
<html>

<head>
	<title>Edit Profile</title>
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
				<a class="navbar-brand" href="../users/home.php" id="navbar-logo">
					<img src="..\img\logo.png" alt="Logo" id="nav-logo">
					<span class="display"></span></a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style=" font-size:18px; ">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="../users/home.php">
							<i class="fa fa-home"></i>
							Home
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
						<a class="nav-link " href="../users/student-details.php">
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
						<a class="nav-link active" href="../users/profile.php">
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
	<div class="container-fluid contact">
		<form action="" method="POST">
			<div class="row" id='SI1'>
				<div class="col-md-3" id='leftstrip'>
					<div class="contact-info">
						<img class='img-fluid' src="..\img\envelop.png" alt="image" />
						<h2>Student</h2>
						<h4>Placement Information</h4>
					</div>
				</div>

				<div class="col-md-9">
					<div class="contact-form">
						<div class="form-group">
							<label class="control-label col-sm-4" for="fname">First Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="fname" value="<?php echo $rows['firstname']; ?>" name="fname" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="lname">Last Name:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="lname" value="<?php echo $rows['lastname']; ?>" name="lname" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4">Gender:</label>
							<div class='col-sm-10'>
								<label class="radio-inline"><input type="radio" name="gender" value="MALE" checked> Male</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" name="gender" value="FEMALE"> Female</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" name="gender" value="OTHER"> Other</label>&nbsp &nbsp &nbsp
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="college">College:</label>
							<div class='col-sm-10'>
								<select class="form-control" id="college" name='college' required>
									<option>College of Technology</option>
									<option>College of Agriculture</option>
									<option>College of Home Science</option>
									<option>College of Fisheries</option>
									<option>College of Veterinary</option>
									<option>College of Basic Sciences and Humanities</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Discipline</label>
							<div class='col-sm-10'>
								<label class="radio-inline"><input type="radio" id='bsc' name="discipline" value="B.sc"> B.Sc</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='msc' name="discipline" value="M.sc"> M.Sc</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='mba' name="discipline" value="MBA"> MBA</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='mca' name="discipline" value="MCA"> MCA</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='mtech' name="discipline" value="M.Tech"> M.Tech</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='btech' name="discipline" value="B.Tech" checked> B.Tech</label>
							</div>
						</div><!-- if btech is selected -->
						<div class="form-group" id='branch'>
							<label class="control-label col-sm-2" for="branch">Branch</label>
							<div class='col-sm-10'>
								<select class="form-control" name='branch' required>
									<option selected><?php echo $rows['branch']; ?></option>
									<option>Information Technology</option>
									<option>Computer Science</option>
									<option>Civil Engineering</option>
									<option>Mechanical Engineering</option>
									<option>Electrical Engineering</option>
									<option>Industrial Production Engineering</option>
									<option>Agriculture Engineering</option>
									<option>Electronics and Communication</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="collid">College Id:</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="colllid" value="<?php echo $rows['college_id']; ?>" name="collid" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email:</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" value="<?php echo $rows['email']; ?>" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="contact">Contact:</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="contact" value="<?php echo $rows['contact']; ?>" name="contact" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="dob">Date of Birth:</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="dob" name="dob" value="<?php echo $rows['dob']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4">Academics</label><br><br>
							<label class="control-label col-sm-6" for="xboard">X-board</label>
							<div class='col-sm-10'>
								<select class="form-control" name='xboard' required>
									<option selected><?php echo $rows['x_board']; ?></option>
									<option>C.B.S.E.</option>
									<option>I.C.S.E.</option>
									<option>Other</option>
								</select>
							</div>
							<label class="control-label col-sm-4" for="xmarks">Percentage</label>
							<div class="col-sm-10">
								<input type="number" max="100" class="form-control" id="xmarks" value="<?php echo $rows['x_marks']; ?>" name="xmarks" required>
							</div>
							<label class="control-label col-sm-4" for="xpass">Passing Year</label>
							<div class="col-sm-10">
								<input type="number" max="3000" class="form-control" id="xpass" value="<?php echo $rows['x_year']; ?>" name="xpass" required>
							</div>
							<label class="control-label col-sm-6" for="xdivision">Division</label>
							<div class='col-sm-10'>
								<select class="form-control" name='xdivision'>
									<option selected><?php echo $rows['x_division']; ?></option>
									<option>First</option>
									<option>Second</option>
									<option>Third</option>
								</select>
							</div>

						</div>
						<br>
						<div class="form-group">
							<label class="control-label col-sm-6" for="xiiboard">XII-board</label>
							<div class='col-sm-10'>
								<select class="form-control" name='xiiboard'>
									<option selected><?php echo $rows['xii_division']; ?></option>
									<option>C.B.S.E.</option>
									<option>I.C.S.E.</option>
									<option>Other</option>
								</select>
							</div>
							<label class="control-label col-sm-4" for="xiimarks">Percentage</label>
							<div class="col-sm-10">
								<input type="number" max="100" class="form-control" id="xiimarks" value="<?php echo $rows['xii_marks']; ?>" name="xiimarks" required>
							</div>
							<label class="control-label col-sm-4" for="xiipass">Passing Year</label>
							<div class="col-sm-10">
								<input type="number" max="3000" class="form-control" id="xiipass" value="<?php echo $rows['xii_year']; ?>" name="xiipass" required>
							</div>
							<label class="control-label col-sm-6" for="xiidivision">Division</label>
							<div class='col-sm-10'>
								<select class="form-control" name='xiidivision'>
									<option selected><?php echo $rows['xii_division']; ?></option>
									<option>First</option>
									<option>Second</option>
									<option>Third</option>
								</select>
							</div>

						</div>
						<br>
						<div class="form-group">
							<label class="control-label col-sm-6" for="gmarks">Graduation C.G.P.A.</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="gmarks" value="<?php echo $rows['cgpa']; ?>" name="gmarks" required>
							</div>
							<label class="control-label col-sm-4" for="gpass">Passing Year</label>
							<div class="col-sm-10">
								<input type="number" max="3000" class="form-control" id="gpass" value="<?php echo $rows['grad_year']; ?>" name="gpass" required>
							</div>
							<label class="control-label col-sm-6" for="gdivision">Division</label>
							<div class='col-sm-10'>
								<select class="form-control" name='gdivision'>
									<option selected><?php echo $rows['grad_div']; ?></option>
									<option>First</option>
									<option>Second</option>
									<option>Third</option>
								</select>
							</div>

						</div>
						<div class="form-group" id='career'>
							<label class="control-label col-sm-4" for="career">Future Career Plans</label>
							<div class='col-sm-10'>
								<select class="form-control" name='career'>
									<option selected><?php echo $rows['career']; ?></option>
									<option>M.B.A</option>
									<option>M.Sc</option>
									<option>M.tech</option>
									<option>Govt.</option>
									<option>Entrepreneurship</option>
									<option>Placement</option>
									<option>Other</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-6" for="training">About Practical Training</label>
							<div class="col-sm-10">
								<textarea class="form-control" name='training' rows="5" id="training" required><?php echo $rows['training']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-6" for="hobbies">Hobbies</label>
							<div class="col-sm-10">
								<textarea class="form-control" name='hobbies' rows="5" id="hobbies" required><?php echo $rows['hobbies']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-6" for="comment">Any other Relevant Information:</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="5" name='comment' id="comment" required><?php echo $rows['comment']; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default" name="update">Update Details</button>
							</div>
						</div>
					</div>
				</div>

			</div>
		</form>
	</div>

</body>
<script>
	$("#branch").hide();
	$("#bsc").click(function() {
		$("#branch").hide(500);
	});
	$("#msc").click(function() {
		$("#branch").hide(500);
	});
	$("#mba").click(function() {
		$("#branch").hide(500);
	});
	$("#mca").click(function() {
		$("#branch").hide(500);
	});

	$("#btech").click(function() {
		$("#branch").show(500);
	});

	$("#mtech").click(function() {
		$("#branch").show(500);
	});
</script>

</html>