<?php
//STUDENT LOGIN
if (isset($_POST['login-submit'])) {

  require 'config.inc.php';
  
  function val($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $email = val($_POST['email']);
  $password = val($_POST['password']);
  $password = md5($password);

  if (empty($email) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "select * FROM login where email = '$email' and password = '$password'";
    $getquery = mysqli_query($conn, $sql) or die("Failed to query database " . mysqli_error());
    $row = mysqli_fetch_assoc($getquery);
    if (mysqli_num_rows($getquery) > 0) {
      if ($row['email'] == $email && $row['password'] == $password) {
        if ($row['email'] != null && $row['password'] != null) {
          if ($row['admin'] == 1) {
            //session_start();
            $_SESSION['admin'] = $row['admin'];
            echo "<script>window.location = '../Admin/home.php'</script>'";
          } else {
            //check if he/she have already filled the form or not

            $sql2 = "select * FROM studentinfo where email = '$email'";
            $query = mysqli_query($conn, $sql2);

            $rows = mysqli_fetch_assoc($query);
            if (mysqli_num_rows($query) == 0) {
              $_SESSION['email'] = $row['email'];
              echo "<script>window.location = '../studentInfo.php'</script>'";
            } else {
              //session_start();
              $_SESSION['id'] = $rows['college_id'];
              echo "<script>window.location = '../users/home.php'</script>'";
            }
          }
        }
      } else {
        echo "<script>alert('Invalid username or password!!!');window.location='../index.php'</script>";
      }
    } else {
      echo "<script>alert('Invalid username or password!!!');window.location='../index.php'</script>";
    }
  }
}
