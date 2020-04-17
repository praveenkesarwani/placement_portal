<?php
include("../includes/config.inc.php");
$user = $_SESSION['email'];
$sql2 = "select * FROM login where email = '$user'";
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Thank You</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

</head>

<body style="overflow: hidden">
    <center style="font-size:20px;margin-top:5%">
        <p>Reset Password link has been sent to the email address provided.</p> 
        <img src="../img/envelop.png" height="80px" width="80px">
        <p> Reset your Password!</p>
        <p> A Reset Paasword link has been sent to <strong><?php echo $rows['email']?></strong>. </p>
        <p> Check your inbox and click on the <b>"Recover my password"</b> link to reset your password. </p>
        <p> If not found in “inbox” check your “spam” and other folders also.</p>
    </center>
</body>

</html>