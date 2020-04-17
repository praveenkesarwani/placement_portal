<?php
include("../includes/config.inc.php");
if(isset($_GET['vkey'])){
    //process Verification
    $vkey = $_GET['vkey'];
    $sql = "select verified, vkey from login where verified = 0 AND vkey='$vkey' LIMIT 1";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        //validate the email
        $update_query ="update login set verified = 1 where vkey='$vkey' limit 1";
        $update = mysqli_query($conn,$update_query);
        if($update){
            header('Location:../index.php');
        } 
    }
    else{
        echo "This account is Invalid or already verified";
    }
}
else{
    die("Something Went Wrong");
}
$user = $_SESSION['email'];
$sql2 = "select * FROM login where email = '$user'";
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Verify Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

</head>

<body style="overflow: hidden">

</body>

</html>