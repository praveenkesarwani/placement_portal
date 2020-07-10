<?php
require '../includes/config.inc.php';
$id = $_SESSION['id']; 
if(!$id==true){ 
    header("Location:../index.php?error=strangeerr"); 
}
$sql2 = "select * FROM studentinfo where college_id = '$id'";
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
	<link rel="stylesheet" href="../css/resume.css">
	<link rel="stylesheet" href="../css/style.css">
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
<style>

.navbar {
	margin: 0;
}

.navbar-brand {
	border: 4px solid #fff;
	margin-left: 30px;
	padding: 7px;
}

#nav-logo {
	float: left;
	width: 50px;
	border-radius: 50%;
	padding-top: 0;
}

#navbar-logo:hover {
	color: #00f7ff;
	border: 4px solid;
}

.navbar-icon-top .navbar-nav .nav-link .fa {
	position: relative;
	width: 30px;
	font-size: 24px;
}
</style>
</head>

<body>
	<!--Header-->
    <header>
        <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
            <h1>
                <a class="navbar-brand" href="home.php" id="navbar-logo">
                    <img src="../img/logo.png" alt="Logo" id="nav-logo">
                    <span class="display"></span></a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style=" font-size:18px; ">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="home.php">
                            <i class="fa fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="messages.php">
                            <i class="fa fa-envelope">
                            </i>
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="student-details.php">
                            <i class="fa fa-users">
                            </i>
                            Student Details
                        </a>
                    </li>
                    <li class="nav-item ">
						<a class="nav-link active" href="profile.php">
							<i class="fa fa-user"></i>
							<?php echo $rows['college_id']; ?>
						</a>
					</li>
                    <li class="nav-item ">
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
	<div class="container resume-content">
		<section class="upper">
			<h2 class="uppercase"><?php echo $rows['firstname'] . " " . $rows['lastname']; ?></h2>
			<address> <i>
					<?php echo $rows['address']; ?>
				</i>
			</address>
			<p> Mobile No : <?php echo $rows['contact']; ?></p>
			<p> E-MAIL : <?php echo $rows['email']; ?></p>
		</section>
		<!--Lower section-->
		<section class="lower">
			<table class="table table-bordered">
				<thead>
					<!--ID Number-->
					<tr>
						<th scope="col">ID Number</th>
						<td colspan="3"><?php echo $rows['college_id']; ?></td>
					</tr>
				</thead>
				<tbody>
					<!--Objective-->
					<tr>
						<th scope="row">Objective</th>
						<td colspan="3"><?php echo $rows['objective']; ?></td>
					</tr>
					<!--Degree & Branch-->
					<tr>
						<th scope="row">Degree & Branch</th>
						<td colspan="3"><?php echo $rows['discipline']; ?> &nbsp&nbsp & &nbsp&nbsp&nbsp <?php echo $rows['branch']; ?></td>
					</tr>
					<!--Date of Birth-->
					<tr>
						<th scope="row">DOB</th>
						<td colspan="3"><?php echo $rows['dob']; ?></td>
					</tr>
					<!--educational record-->
					<tr>
						<th scope="row">Education Record</th>
						<td colspan="3">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Examination</th>
										<th>Board</th>
										<th>% Marks</th>
										<th>Passing Year</th>
										<th>Division</th>
									</tr>
									<th>X</th>
									<td><?php echo $rows['x_board']; ?></td>
									<td><?php echo $rows['x_marks']; ?></td>
									<td><?php echo $rows['x_year']; ?></td>
									<td><?php echo $rows['x_division']; ?></td>
									<tr>
										<th>XII</th>
										<td><?php echo $rows['xii_board']; ?></td>
										<td><?php echo $rows['xii_marks']; ?></td>
										<td><?php echo $rows['xii_year']; ?></td>
										<td><?php echo $rows['xii_division']; ?></td>
									</tr>
									<tr>
										<th><?php echo $rows['discipline']; ?></th>
										<td>AICTE (GBPUA&T)</td>
										<td><?php echo $rows['cgpa']; ?></td>
										<td><?php echo $rows['grad_year']; ?></td>
										<td><?php echo $rows['grad_div']; ?></td>
									</tr>
								</thead>
							</table>
						</td>
					</tr>
					<!--Practical training-->
					<tr>
						<th rowspan="2">Practical Training</th>
						<th>Name of Organization</th>
						<th>Project</th>
						<th>Duration</th>
					</tr>
					<tr>
						<td><?php echo $rows['organization']; ?></td>
						<td><?php echo $rows['project']; ?></td>
						<td><?php echo $rows['duration']; ?> Days</td>
					</tr>
					<!--Skills-->
					<tr>
						<th scope="row">Computer skills</th>
						<td colspan="3"><?php echo $rows['skill']; ?></td>
					</tr>
					<!--Hobbies-->
					<tr>
						<th scope="row">Hobbies</th>
						<td colspan="3"><?php echo $rows['hobbies']; ?></td>
					</tr>
					<!--Any others relevant information-->
					<tr>
						<th scope="row">Any others relevant information</th>
						<td colspan="3"><?php echo $rows['comment']; ?></td>
					</tr>
				</tbody>
			</table>
			<h6>I certify that the information given above is true to the best of my knowledge and belief.</h6>
			<p class="sign uppercase"><?php echo $rows['firstname'] . " " . $rows['lastname']; ?></p>
		</section>
	</div>
	<form action="edit-details.php" method="POST">
		<div class="form-group contact-form text-center">
			<div class="col-sm-offset-2 col-sm-12">
				<button type="submit" class="btn btn-default">EDIT DETAILS</button>
			</div>
		</div>
	</form>
</body>

</html>