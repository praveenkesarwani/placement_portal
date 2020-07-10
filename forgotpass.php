<?php
require 'includes/config.inc.php';
$error = NULL;
if (isset($_POST['submit'])) {
	//Get Form Data
	function val($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$email = val($_POST['email']);
	$security_ques = $_POST['security_ques'];
	$security_ans = $_POST['security_ans'];

	$sql = "select email,security_ques,security_ans from login where email='$email'";
	$result = mysqli_query($conn, $sql);
	$rows = mysqli_fetch_assoc($result);
	//Email validation
	if (mysqli_num_rows($result) == 0) {
		$error .= "<p>USER DOES NOT EXIST</p>";
	} else {
		//email is Valid
		$_SESSION['email'] = $email;
		if ($security_ques == $rows['security_ques'] and $security_ans == $rows['security_ans']) {
			header("Location:registration/reset-password.php");
		} else {
			$error .= "<p>ENTER CORRECT SECURITY QUESTION / ANSWER</p>";
		}
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Recover Your Password</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img\logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="" method="POST">
						<div>
							<h4 style="text-align:center;font-weight:bold;">FORGOT PASSWORD</h4><br>
							<center style="color:red;font-weight:bold;">
								<?php echo $error; ?>
							</center>
						</div>
						<div class="label">
							<!--email-->
							<label>Email Id:</label>
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="email" name="email" class="form-control input_user" value="" placeholder="Email" required>
							</div>
							<!--Security Question-->
							<label>Security Question:</label>
							<div class="dropdown">
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
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="submit" class="btn login_btn">Submit</button>
						</div>
						<div class="mt-4">
							<div class="d-flex justify-content-center links">
								Don't have an account? <a style='color:white' href="registration/signup.php" class="ml-2">Sign Up</a>
							</div>
						</div>
					</form>
				</div><br>
			</div>
		</div>
	</div>
</body>

</html>