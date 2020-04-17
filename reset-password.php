<!DOCTYPE html>
<html>
<?php
include("includes/config.inc.php");
$user = $_SESSION['email'];
if(isset ($_POST['reset']))
{
    $password = $_POST['password'];
    $cnfpassword = $_POST['confirm-password'];

    if($password !== $cnfpassword){
        header("Location:reset-password.php?error=passwordMismatch");
        exit();
    }
    $sql = "UPDATE `login` SET `password`='$password' WHERE email='$user'";
    $result=mysqli_query($conn,$sql) ;
    if($result){
        header("Location:index.php?passwordChanged=success");
        exit();
    }
    else{
        echo "<script>alert('Something Went Wrong');window.location = 'index.php' </script>'";
    }
    mysqli_close($conn);
}
?>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
                    <form action="" method ="POST">
                        <div class="d-flex justify-content-center links">
                            <h3 style='color:white'>Change Password</h3>
                        </div><br>
                        <p style='color:white'>New Password</p>
                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
                        </div>
                        <p style='color:white'>Confirm Password</p>
                        <div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
							<input type="password" name="confirm-password" class="form-control input_pass" value="" placeholder="confirm password">
						</div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="reset" class="btn login_btn">RESET</button>
                        </div>
                    </form>
                </div><br>
            </div>
        </div>
    </div>
</body>

</html>