<?php
require 'includes/config.inc.php';
if(isset ($_POST['submit']))
{   
	//Get Form Data
    function val($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
	$email = val($_POST['email']);
	$sql = "select email,vkey,verified from login where email='$email'";
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_fetch_assoc($result);
	//check confirm password
	if(mysqli_num_rows($result) == 0){
		echo "Enter a valid email address";
	}
	else{
		//email is Valid

		//Generate VKey
		$vkey = $rows['vkey'];
		//Send Email
		$to = $email;
		$subject = "Reset Password";
		$message = "<a href='http://localhost/placement/registration/reset-password.php?vkey=$vkey'>Recover my password</a>";
		$headers = "From: praveenkesarwani739@gmail.com \r\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$_SESSION['email'] = $email;
		mail($to,$subject,$message,$headers);
		header('Location:registration/reset-pass-notify.php');
    }
    mysqli_close($conn);
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
						<div class="d-flex justify-content-center links">
							<h3 style='color:black'><b>FORGOT PASSWORD</b></h3>
						</div><br>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" value="" placeholder="Enter your email" required>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="submit" class="btn login_btn">Send Code</button>
						</div>
						<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Already have an account? <a style='color:white' href="index.php" class="ml-2">Log In</a>
					</div>
				</div>
					</form>
				</div><br>
			</div>
		</div>
	</div>
</body>

</html>