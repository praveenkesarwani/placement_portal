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
<!DOCTYPE html>
<html lang="en">

<head>
	<title> Message</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

	<!-- css-->
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

</head>

<style type="text/css">
	.card-header {
		padding: 15px;
		font-size: 30px;
	}

	.card-body {
		padding: 15px;
	}

	.card-footer {
		text-align: left;
		padding: 15px;
	}
</style>

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
							<span class="sr-only"></span>
						</a>
					</li>

					<li class="nav-item active">
						<a class="nav-link" href="messages.php">
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

					<li class="nav-item dropdown">
						<a class="nav-link " href="profile.php">
							<i class="fa fa-user"></i>
							<?php echo $rows['college_id'];
							?>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="../includes/logout.inc.php">
							<i class="fa fa-sign-out"></i>Logout
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!--php code starts-->
	<div class="container">
		<br>
		<?php
		$id = $rows['college_id'];
		$query = "SELECT * FROM messages WHERE receiver_id ='$id'";
		$result = mysqli_query($conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$img_src = $row['notice'];
		?>
			<div class="container">
				<div class="card">
					<div class="card-header"><b><?php echo $row['sender']; ?></b></div>
					<div class="card-body"><?php echo $row['message']; ?>
						<span style="float: right"><?php echo $row['msg_date'] . " " . $row['msg_time']; ?></span>
					</div>
					<div class="card-body">
						<a href="../Admin/uploads/<?php echo $img_src; ?>">
							<img src="../Admin/uploads/<?php echo $img_src; ?>" alt="Notice" title="<?php echo $img_src; ?>" width="20%" height="10%" class="img-responsive" />
						</a>
					</div>
				</div>
			</div>
			<br><br>
		<?php
		}
		?><br><br>
	</div>
</body>

</html>