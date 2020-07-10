<?php
require '../includes/config.inc.php';
$error = null;
$user = $_SESSION['email'];
if (isset($_POST['reset'])) {
    //Get Form Data
    function val($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $password = val($_POST['password']);
    $cnfpassword = val($_POST['confirm_password']);
    if ($password != $cnfpassword) {
        $error .= "<p>PASSWORD DO NOT MATCH</p>";
    } else {
        //Update password
        $password = md5($password);
        $sql = "UPDATE login SET `password`= '$password' where email = '$user'";
        $update = mysqli_query($conn, $sql);
        if ($update) {
            //go to login page
            echo "<script>alert('Password Changed Successfully!');window.location='../index.php'</script>";
        } else {
            $error .= "<p>FAILED TO UPDATE PASSWORD</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
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
                    <form action="" method="POST">
                        <div>
                            <h4 style="text-align:center;font-weight:bold;">RESET PASSWORD</h4><br>
                            <center style="color:red;font-weight:bold;">
                                <?php echo $error; ?>
                            </center>
                        </div>
						<div class="label">
                        <label>Enter Password:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
                        </div>
                        <label>Re-Enter Password:</label>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="confirm_password" class="form-control input_pass" value="" placeholder="Re-Enter Password" required>
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