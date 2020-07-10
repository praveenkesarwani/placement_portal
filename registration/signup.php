<?php
$error = NULL;
include("../includes/config.inc.php");
//deactivating this feature due to our classmates
//header("Location:../index.php?signup=featureDeactivated");
if (isset($_POST['signup-submit'])) {
	//Get Form Data
	function val($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$email = val($_POST['email']);
	$password = val($_POST['password']);
	$cnfpassword = val($_POST['confirm_password']);
	$security_ques = $_POST['security_ques'];
	$security_ans = $_POST['security_ans'];

	//check confirm password
	if ($password != $cnfpassword) {
		$error .= "<p>PASSWORD DO NOT MATCH</p>";
	} else {

		$password = md5($password);
		$sql = "INSERT INTO `login`(`email`, `password`, `security_ques`, `security_ans`) 
		VALUES ('$email','$password','$security_ques','$security_ans')";
		$insert = mysqli_query($conn, $sql);
		if ($insert) {
			header("Location:../index.php?signup=success");
		} else {
			//duplicate entry
			$error .= "<p>USER ALREADY EXISTS</p>";
		}
	}
	mysqli_close($conn);
}
?>
<!-------------------------------------------------HTML code starts----------------------------------->
<!DOCTYPE html>
<html>

<head>
	<title>Registraion Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../img\logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<!--form started-->
					<div class="label">
						<form action="" method="POST"><br>
							<div>
								<h4 style="text-align:center;font-weight:bold;">STUDENT SIGN UP</h4><br>
								<center style="color:red;font-weight:bold;">
									<?php echo $error; ?>
								</center>
							</div>
							<!--email-->
							<div class="label">
								<label>Email ID:</label>
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-user"></i></span>
									</div>
									<input type="email" name="email" class="form-control input_user" value="" placeholder="Email" required>
								</div>
								<!--password-->
								<label>Password:</label>
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
								</div>
								<!--re-enter password-->
								<label>Re-Enter Password:</label>
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" name="confirm_password" class="form-control input_pass" value="" placeholder="ReType Password" required>
								</div>
								<!--Security Question-->
								<label>Security Question:</label>
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
									</div>
									<select class="form-control" name='security_ques'>

										<option>What was your childhood nickname?</option>
										<option>What is your previous school name?</option>
										<option>What was your dream job as a child?</option>
										<option>What is your favorite movie?</option>
										<option>What is your pet's name?</option>
										<option>What is your favorite TV Series?</option>
										<option>What is your favorite sport?</option>
										<option>What was/is your first car brand?</option>
										<option>In what city were you born?</option>
									</select>
								</div>
								<!--Security Answer-->
								<label>Security Answer:</label>
								<div class="input-group mb-2">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fas fa-lock"></i></span>
									</div>
									<input type="text" name="security_ans" class="form-control input_pass" value="" placeholder="Security Answer" required>
								</div>
							</div>
							<!--Submit-->
							<div class="d-flex justify-content-center mt-3 login_container">
								<button type="submit" name="signup-submit" class="btn login_btn">Sign Up</button>
							</div>
						</form>
						<!--form end-->
					</div>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Already have an account? <a style='color:white' href="../index.php" class="ml-2">Log In</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>