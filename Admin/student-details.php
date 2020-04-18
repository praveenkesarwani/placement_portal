<?php
require '../includes/config.inc.php';
?>
<html>

<head>
    <title>Students Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

    <!-- css-->
    <link rel="stylesheet" href="../css\style.css">

    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!--Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <!--Header-->
    <header>
        <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
            <h1>
                <a class="navbar-brand" href="home.php" id="navbar-logo">
                    <img src="../img/logo.png" alt="Logo" id="nav-logo">
                    <span class="display"></span></a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style=" font-size:18px; ">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="home.php">
                            <i class="fa fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-envelope">
                            </i>
                            Messages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fa fa-users">
                            </i>
                            Student Details
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">
                            <i class="fa fa-bell"></i>
                            Notice
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="../includes/logout.inc.php">
                            <i class="fa fa-sign-out"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--contents-->
    <div class="container-fluid contact">
        <div class="row">
            <div class='col-md-3 col-xs-12' id='leftstrip'>
                <form action="" method="POST">
                    <h5>College</h5>
                    <div class="form-group">
                        <div>
                            <select class="form-control" id="college" name='college'>
                                <option>College of Technology</option>
                                <option>College of Agriculture</option>
                                <option>College of Home Science</option>
                                <option>College of Fisheries</option>
                                <option>College of Veterinary</option>
                                <option>College of Basic Sciences and Humanities</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            <h5>Discipline</h5>
                        </label>
                        <div class='col-sm-14'>
                            <label class="radio-inline"><input type="radio" id='btech' name="discipline" value="B.Tech" required> B.Tech</label>
                            <label class="radio-inline"><input type="radio" id='mtech' name="discipline" value="M.Tech"> M.Tech</label>
                            <label class="radio-inline"><input type="radio" id='bsc' name="discipline" value="B.sc"> B.Sc</label>
                            <label class="radio-inline"><input type="radio" id='msc' name="discipline" value="M.sc"> M.Sc</label>
                            <label class="radio-inline"><input type="radio" id='mba' name="discipline" value="MBA"> MBA</label>
                            <label class="radio-inline"><input type="radio" id='mca' name="discipline" value="MCA"> MCA</label>
                        </div>
                    </div><!-- if btech is selected -->
                    <div class="form-group" id='branch'>
                        <label class="control-label " for="branch">
                            <h5>Branch</h5>
                        </label>

                        <div>
                            <select class="form-control" name='branch'>
                                <option>Information Technology</option>
                                <option>Computer Science</option>
                                <option>Civil Engineering</option>
                                <option>Mechanical Engineering</option>
                                <option>Electrical Engineering</option>
                                <option>Industrial Production Engineering</option>
                                <option>Agriculture Engineering</option>
                                <option>Electronics and Communication</option>
                            </select>
                        </div>
                    </div>

                    <label class="control-label" for="pass">
                        <h5>Passing Year</h5>
                    </label>

                    <div>
                        <select class="form-control" placeholder="passing year" name="pass">
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                        </select>
                    </div><br>

                    <label class="control-label" for="pass">
                        <h5>CGPA</h5>
                    </label>
                    <div>
                        <select class="form-control" placeholder="cgpa" name="cgpa">
                            <option>6.0 or above</option>
                            <option>6.5 or above</option>
                            <option>7.0 or above</option>
                            <option>7.5 or above</option>
                        </select>
                    </div><br>

                    <div class="form-group" id='career'>
                        <label class="control-label" for="career">
                            <h5>Future Career Plans</h5>
                        </label>
                        <div>
                            <select class="form-control" name='career'>
                                <option>M.B.A</option>
                                <option>M.Sc</option>
                                <option>M.tech</option>
                                <option>Govt.</option>
                                <option>Entrepreneurship</option>
                                <option>Placement</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>
                            <h5>Male/Female</h5>
                        </label>
                        <div>
                            <label class="radio-inline"><input type="radio" id='male' name="gender" value="MALE" required> Male</label>&nbsp &nbsp &nbsp
                            <label class="radio-inline"><input type="radio" id='btech' name="gender" value="FEMALE"> Female</label>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-default" name=search>Search</button>&nbsp; &nbsp;
                        </div>
                    </div>
                </form>

            </div>
            <div class='col-md-9 col-xs-12'>
                <h2 class="heading text-capitalize mb-sm-5 mb-4 text-center"> Student Details </h2>
                <?php
                //php code starts

                if (isset($_POST['search'])) {
                    $college = $_POST['college'];
                    $discipline = $_POST['discipline'];
                    $branch = $_POST['branch'];
                    $passing_year = $_POST['pass'];
                    $cgpa = $_POST['cgpa'];
                    $career = $_POST['career'];
                    $gender = $_POST['gender'];

                    /*echo "<script type='text/javascript'>alert('<?php echo $search_box; ?>')</script>";*/
                    $user = $_SESSION['email'];
                    $query_search = "SELECT * FROM studentinfo 
                                    WHERE college='$college' and  discipline='$discipline' and branch='$branch'
                                    and grad_year='$passing_year' and career='$career' and gender='$gender' and
                                     cgpa>='$cgpa' ORDER BY college ASC,firstname ASC";
                    $result_search = mysqli_query($conn, $query_search);
                ?>
                    <div class="container">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Student Name</th>
                                    <th>Student ID</th>
                                    <th>Contact Number</th>
                                    <th>Email Id</th>
                                    <th>College</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($result_search) == 0) {
                                    echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                                } else {
                                    $count = 1;
                                    while ($row_search = mysqli_fetch_assoc($result_search)) {
                                        //get the name of the student to display
                                        $student_name = $row_search['firstname'] . " " . $row_search['lastname'];
                                        $college_id = $row_search['college_id'];
                                        $contact = $row_search['contact'];
                                        $email = $row_search['email'];
                                        $college = $row_search['college'];
                                        //student name

                                        echo "<tr><td>{$count}</td><td>{$student_name}</td><td>{$college_id}</td><td>{$contact}</td><td>{$email}</td><td>{$college}</td></tr>\n";
                                        $count++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                } else {
                ?>
                    <div class="container">

                        <?php
                        $user = $_SESSION['email'];
                        $query1 = "SELECT * FROM studentInfo ORDER BY college ASC,firstname ASC,grad_year ASC";
                        $result1 = mysqli_query($conn, $query1);
                        ?>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Student Name</th>
                                    <th>Student ID</th>
                                    <th>Contact Number</th>
                                    <th>Email Id</th>
                                    <th>College</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (mysqli_num_rows($result1) == 0) {
                                echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                            } else {
                                $count = 1;
                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                    //student name
                                    $student_name = $row1['firstname'] . " " . $row1['lastname'];

                                    echo "<tr><td>{$count}</td><td>{$student_name}</td><td>{$row1['college_id']}</td><td>{$row1['contact']}</td><td>{$row1['email']}</td><td>{$row1['college']}</td></tr>\n";
                                    $count++;
                                }
                            }
                        }
                            ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

</body>

</html>
<script>
    $("#branch").hide();
    $("#bsc").click(function() {
        $("#branch").hide(500);
    });
    $("#msc").click(function() {
        $("#branch").hide(500);
    });
    $("#mba").click(function() {
        $("#branch").hide(500);
    });
    $("#mca").click(function() {
        $("#branch").hide(500);
    });

    $("#btech").click(function() {
        $("#branch").show(500);
    });

    $("#mtech").click(function() {
        $("#branch").show(500);
    });
</script>