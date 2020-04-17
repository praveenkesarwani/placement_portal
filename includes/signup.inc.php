<?php
$error = NULL;
include("config.inc.php");
if(isset ($_POST['signup-submit']))
{   
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

    if($password !== $cnfpassword){
        header("Location: ../signup.php?error=passwordMismatch");
        exit();
    }
    $sql = "INSERT INTO `login`(`email`, `password`) 
            VALUES ('$email','$password')";
    $result=mysqli_query($conn,$sql) ;
    if($result){
        $_SESSION['user_name']=$email;
        header("Location:../index.php?signup=success");
        exit();
    }
    else{
        echo "<script>alert('User Already Exists');window.location = '../signup.php' </script>'";
    }
    mysqli_close($conn);
}
?>
