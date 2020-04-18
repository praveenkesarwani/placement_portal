<?php
if (isset($_POST['submit'])) {
    require 'config.inc.php'; {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $college = $_POST['college'];
        $discipline = $_POST['discipline'];
        $branch = $_POST['branch'];
        $collid = $_POST['collid'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $dob = $_POST['dob'];
        $xboard = $_POST['xboard'];
        $xmarks = $_POST['xmarks'];
        $xpass = $_POST['xpass'];
        $xdivision = $_POST['xdivision'];
        $xiiboard = $_POST['xiiboard'];
        $xiimarks = $_POST['xiimarks'];
        $xiipass = $_POST['xiipass'];
        $xiidivision = $_POST['xiidivision'];
        $gmarks = $_POST['gmarks'];
        $gpass = $_POST['gpass'];
        $gdivision = $_POST['gdivision'];
        $career = $_POST['career'];
        $training = $_POST['training'];
        $hobbies = $_POST['hobbies'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO studentinfo (firstname,lastname,gender,college,discipline, branch, college_id, email, contact,
           dob,x_board, x_marks, x_year, x_division, xii_board, xii_marks, xii_year, xii_division, cgpa, grad_year, 
           grad_div, career, training, hobbies, comment) 
            VALUES ('$fname','$lname','$gender','$college','$discipline','$branch','$collid','$email','$contact','$dob','$xboard','$xmarks',
            '$xpass','$xdivision','$xiiboard','$xiimarks','$xiipass','$xiidivision',
            '$gmarks','$gpass','$gdivision','$career','$training','$hobbies','$comment')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['email'] = $email;
            header("Location:../users/home.php?savedInfo=success");
        } else {
            header("error=detailsNotSaved");
        }
        mysqli_close($conn);
    }
}
