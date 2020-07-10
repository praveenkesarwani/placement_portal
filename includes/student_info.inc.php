<?php
require 'config.inc.php';
if (isset($_POST['submit'])) {
        $fname = strip_tags($_POST['fname']);
        $lname = strip_tags($_POST['lname']);
        $gender = strip_tags($_POST['gender']);
        $address = strip_tags($_POST['address']);
        $contact = strip_tags($_POST['contact']);
        $email = strip_tags($_POST['email']);
        $collid = strip_tags($_POST['collid']);
        $objective = strip_tags($_POST['objective']);
        $discipline = strip_tags($_POST['discipline']);
        $branch = strip_tags($_POST['branch']);
        $college = strip_tags($_POST['college']);
        $dob = strip_tags($_POST['dob']);
        $xboard = strip_tags($_POST['xboard']);
        $xmarks = strip_tags($_POST['xmarks']);
        $xpass = strip_tags($_POST['xpass']);
        $xdivision = strip_tags($_POST['xdivision']);
        $xiiboard = strip_tags($_POST['xiiboard']);
        $xiimarks = strip_tags($_POST['xiimarks']);
        $xiipass = strip_tags($_POST['xiipass']);
        $xiidivision = strip_tags($_POST['xiidivision']);
        $gmarks = strip_tags($_POST['gmarks']);
        $gpass = strip_tags($_POST['gpass']);
        $gdivision = strip_tags($_POST['gdivision']);
        $organization = strip_tags($_POST['orgName']);
        $project = strip_tags($_POST['projectName']);
        $duration = strip_tags($_POST['duration']);
        $career = strip_tags($_POST['career']);
        $skills = strip_tags($_POST['skills']);
        $hobbies = strip_tags($_POST['hobbies']);
        $comment = strip_tags($_POST['comment']);

        
        $sql = "INSERT INTO `studentinfo`(`firstname`, `lastname`, `gender`, `address`, `college`, `discipline`, 
        `branch`, `college_id`, `objective`, `email`, `contact`, `dob`, `x_board`, `x_marks`, `x_year`, `x_division`, `xii_board`, 
        `xii_marks`, `xii_year`, `xii_division`, `cgpa`, `grad_year`, `grad_div`, `organization`, `project`, `duration`, `career`, `skill`, 
        `hobbies`, `comment`)  
        VALUES ('$fname','$lname','$gender','$address','$college','$discipline','$branch','$collid','$objective','$email','$contact','$dob',
        '$xboard','$xmarks','$xpass','$xdivision','$xiiboard','$xiimarks','$xiipass','$xiidivision',
        '$gmarks','$gpass','$gdivision','$organization','$project','$duration','$career','$skills','$hobbies','$comment')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $_SESSION['email'] = $email;
            header("Location:../users/home.php?savedInfo=success");
        } else {
            header("error=detailsNotSaved");
        }
        mysqli_close($conn);
    }