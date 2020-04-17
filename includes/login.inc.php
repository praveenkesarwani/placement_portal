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
            $_SESSION['email'] = $row['email'];
            echo "<script>window.location = '../Admin/admin-home.php'</script>'";
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
              $_SESSION['firstname'] = $rows['firstname'];
              $_SESSION['lastname'] = $rows['lastname'];
              $_SESSION['college'] = $rows['college'];
              $_SESSION['discipline'] = $rows['discipline'];
              $_SESSION['branch'] = $rows['branch'];
              $_SESSION['college_id'] = $rows['college_id'];
              $_SESSION['email'] = $rows['email'];
              $_SESSION['contact'] = $rows['contact'];
              $_SESSION['dob'] = $rows['dob'];
              $_SESSION['x_board'] = $rows['x_board'];
              $_SESSION['x_marks'] = $rows['x_marks'];
              $_SESSION['x_year'] = $rows['x_year'];
              $_SESSION['x_division'] = $rows['x_division'];
              $_SESSION['xii_board'] = $rows['xii_board'];
              $_SESSION['xii_marks'] = $rows['xii_marks'];
              $_SESSION['xii_year'] = $rows['xii_year'];
              $_SESSION['xii_division'] = $rows['xii_division'];
              $_SESSION['cgpa'] = $rows['cgpa'];
              $_SESSION['grad_year'] = $rows['grad_year'];
              $_SESSION['grad_div'] = $rows['grad_div'];
              $_SESSION['career'] = $rows['career'];
              $_SESSION['training'] = $rows['training'];
              $_SESSION['hobbies'] = $rows['hobbies'];
              $_SESSION['comment'] = $rows['comment'];
              //check if session started or not
              /*
              if(isset($_SESSION['firstname'])){
                echo "<script type='text/javascript'>alert('Set')</script>";
              }
              else {
                echo "<script type='text/javascript'>alert('Not SET')</script>";
              }
              */
              echo "<script>window.location = '../home.php'</script>'";
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
