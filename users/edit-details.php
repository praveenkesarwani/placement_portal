<?php
require '../includes/config.inc.php';
$id = $_SESSION['id'];
$sql2 = "select * FROM studentinfo where college_id = '$id'";
if(!$id == true){
    header("Location:../index.php?error=strangeerr");
}
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);
if (isset($_POST['update'])) {
	$address = strip_tags($_POST['address']);
	$contact = strip_tags($_POST['contact']);
	$objective = strip_tags($_POST['objective']);
	$gmarks = strip_tags($_POST['gmarks']);
	$gpass = strip_tags($_POST['gpass']);
	$gdivision = strip_tags($_POST['gdivision']);
	$organization = strip_tags($_POST['orgName']);
	$project = strip_tags($_POST['projectName']);
	$duration = strip_tags($_POST['duration']);
	$skills = strip_tags($_POST['skills']);
	$hobbies = strip_tags($_POST['hobbies']);
	$comment = strip_tags($_POST['comment']);

    
	$sql = "UPDATE studentinfo SET address='$address', objective='$objective',
	contact='$contact',cgpa='$gmarks',grad_year='$gpass',grad_div='$gdivision',organization='$organization',project='$project',
    duration='$duration',skill='$skills',hobbies='$hobbies',comment='$comment' 
	WHERE college_id = '$id'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location:home.php?updatedInfo=success");
	} else {
		echo "<script>alert('details not updated');window.location = 'edit-details.php' </script>'";
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
	<div class="contact-form">
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
							
							<!--Address-->
							<div class="form-group">
								<label class="control-label col-sm-4">Address</label>
								<div class='col-sm-10'>
									<input type="text" class="form-control" id="address" value="<?php echo $rows['address']; ?>" name="address" required>
								</div>
							</div>
							<!--Mobile number-->
							<div class="form-group">
								<label class="control-label col-sm-2" for="contact">
									Mobile No
								</label>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="contact" value="<?php echo $rows['contact']; ?>" name="contact" required>
								</div>
							</div>
					
							<!--objective-->
							<div class="form-group">
								<label class="control-label col-sm-2" for="objective">
									Objective
								</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="objective" value="<?php echo $rows['objective']; ?>" name="objective">
								</div>
							</div>
								<!--Academics-->
								<div class="form-group">
									<label class="control-label col-sm-6" for="Academics">Academics Details</label>
									<div class="form-group">
										<div class="col-sm-10">
											<table class="table table-bordered background">
												<thead>
													<tr>
														<th>Examination</th>
														<th>Board</th>
														<th>%Marks</th>
														<th>Passing Year</th>
														<th>Divisions</th>
													</tr>
												</thead>
												<tbody>

													
													<tr>
														<!--Graduation Details-->
														<th>Graduation</th>
														<td>
															AICTE (GBPUA&T)
														</td>
														<td>
															<input type="text" max="100" class="form-control" id="gmarks" value="<?php echo $rows['cgpa']; ?>" name="gmarks"> </td>
														<td>
															<input type="number" max="3000" class="form-control" id="gpass" value="<?php echo $rows['grad_year']; ?>" name="gpass" required>
														</td>
														<td>
															<select class="form-control" name='gdivision'>
																<option>First</option>
																<option>Second</option>
																<option>Third</option>
															</select>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<!--Practical Training-->
										<div class="form-group">
											<label class="control-label col-sm-6" for="training">
												Practical Training
											</label>
											<div class="form-group">
												<div class="col-sm-10">
													<table class="table table-bordered background">
														<thead>
															<th>Name of Organization</th>
															<th>Name of Project</th>
															<th>Duration</th>
														</thead>
														<tbody>
															<tr>
																<td>
																	<!--Name of Organization-->
																	<input type="text" class="form-control" id="orgName" value="<?php echo $rows['organization']; ?>" name="orgName" required>
																</td>
																<td>
																	<!--Name of Project-->
																	<input type="text" class="form-control" id="projectName" value="<?php echo $rows['project']; ?>" name="projectName" required>
																</td>
																<td>
																	<!--Duration-->
																	<input type="number" class="form-control" id="duration" value="<?php echo $rows['duration']; ?>" name="duration" required>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										
										<!--Skills-->
										<div class="form-group">
											<label class="control-label col-sm-4" for="skills">Computer Skills</label>
											<div class="col-sm-10">
												<textarea class="form-control" rows="5" name='skills' id="skills" required><?php echo $rows['skill']; ?></textarea>
											</div>
										</div>
										<!--Hobbies-->
										<div class="form-group">
											<label class="control-label col-sm-6" for="hobbies">Hobbies</label>
											<div class="col-sm-10">
												<textarea class="form-control" name='hobbies' rows="5" id="hobbies" required><?php echo $rows['hobbies']; ?></textarea>
											</div>
										</div>
										<!--Extra curriculam-->
										<div class="form-group">
											<label class="control-label col-sm-6" for="comment">Any other Relevant Information:</label>
											<div class="col-sm-10">
												<textarea class="form-control" rows="5" name='comment' id="comment" required><?php echo $rows['comment']; ?></textarea>
											</div>
										</div>
										<!--Submit-->

										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<button type="submit" class="btn btn-default" name="update">Update Details</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
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