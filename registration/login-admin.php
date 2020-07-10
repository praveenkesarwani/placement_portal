<!DOCTYPE html>
<html>

<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
						<img src="..\img\logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">

					<!--form started-->
					<div class="label">
						<form action="../includes/login.inc.php" method="POST">
							<div>
								<h4 style="text-align:center;font-weight:bold;">ADMIN LOGIN</h4><br>
							</div>
							<label>user id:</label>
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="text" name="email" class="form-control input_user" value="" placeholder="USER ID" required>
							</div>
							<label>PASSWORD:</label>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="password" class="form-control input_pass" value="" placeholder="PASSWORD">
							</div>
							<div class="d-flex justify-content-center mt-3 login_container">
								<button type="submit" name="login-submit" class="btn login_btn">Login</button>
							</div>
						</form>
					</div>
					<!--form end-->
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Login as: <a style='color:white' href="../index.php" class="ml-2">Student</a><br><br>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>

</html>