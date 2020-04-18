<?php
$error = NULL;
include("../includes/config.inc.php");
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

	//check confirm password
	if ($password != $cnfpassword) {
		$error .= "<p>Your password do not match</p>";
	} else {
		//Form is Valid

		//Generate VKey
		$vkey = md5(time());

		//Insert acount into the database
		$password = md5($password);
		$sql = "INSERT INTO `login`(`email`, `password`,`vkey`) 
        	    VALUES ('$email','$password','$vkey')";
		$insert = mysqli_query($conn, $sql);
		
		if ($insert) {
			//Send Email
			$to = $email;
			$subject = "Email Verification";
			$message = "<a href='http://localhost/placement/registration/verify.php?vkey=$vkey'>Confirm my email</a>";
			$headers = "From: praveenkesarwani739@gmail.com \r\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			$_SESSION['email'] = $email;
			mail($to, $subject, $message, $headers);
			header('Location:thankyou.php');
		} else {
		echo mysqli_error($conn);
	}
}
	mysqli_close($conn);
}
?>

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

					<form action="" method="POST"><br>
						<div>
							<h4 style="text-align:center;font-weight:bold;">STUDENT SIGN UP</h4><br>
							<center>
								<?php
								echo $error;
								?>
							</center>
						</div>
						<p style='color:white'>Enter user mail</p>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="Email" required>
						</div>
						<p style='color:white'>Set user Password</p>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
						</div>
						<p style='color:white'>ReType Password</p>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="confirm_password" class="form-control input_pass" value="" placeholder="ReType Password" required>
						</div>
						<!--<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
						-->
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="signup-submit" class="btn login_btn">Sign Up</button>
						</div>
					</form>
					<!--form end-->
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