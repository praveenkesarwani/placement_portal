<?php
require '../includes/config.inc.php';
$id = $_SESSION['id']; 
if(!$id==true){ 
    header("Location:../index.php?error=strangeerr"); 
}
$sql2 = "select * FROM studentinfo where college_id = '$id'";
$query = mysqli_query($conn, $sql2) or die("Failed to query database " . mysqli_error());
$rows = mysqli_fetch_assoc($query);
$branch = $rows['branch'];
?>
<html>

<head>
    <title>Students Details</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

    <!-- css-->
    <link rel="stylesheet" href="../css/style.css">

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
                        <a class="nav-link" href="messages.php">
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
                    <li class="nav-item ">
                        <a class="nav-link " href="profile.php">
                            <i class="fa fa-user"></i>
                            <?php echo $rows['college_id']; ?>
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
    <div class="container-fluid contact content">
        <div class="row">
            <div class='col-md-3 col-xs-12' id='leftstrip'>
                <div class="col-md">
                    <img src="..\img\logo.png" alt="Logo" id="footer-logo">
                    <p><br>
                        Directorate of Placement and Counselling, G.B.P.U.A.T Pantnagar.
                    </p>
                </div>
            </div>

            <div class='col-md-9 col-xs-12'>
                <h2 class="heading text-capitalize mb-sm-6 text-center" id="profile-heading"> Students Details </h2>
                <div class="container">

                    <?php
                    $user = $_SESSION['email'];
                    $query1 = "SELECT * FROM studentinfo where branch = '$branch' ORDER BY firstname ASC";
                    $result1 = mysqli_query($conn, $query1);
                    ?>

                    <table class="table table-hover">
                        <thead id="table-td">
                            <tr>
                                <th>Sl No</th>
                                <th>Student Name</th>
                                <th>Student ID</th>
                                <th>College</th>
                                <th>Passing Year</th>
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

                                    echo "<tr><td>{$count}</td><td>{$student_name}</td><td>{$row1['college_id']}</td><td>{$row1['college']}</td><td>{$row1['grad_year']}</td></tr>\n";
                                    $count++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-->
    <section id="myfooter">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="..\img\logo.png" alt="Logo" id="footer-logo">
                                <br><br>
                                Directorate of Placement and Counselling, G.B.P.U.A.T<br> Pantnagar.
                                <br> <br>
                            </div>
                            <div class="col-lg-4">
                                <h3>Contact</h3>
                                <p><i class="fas fa-map-marker-alt"></i> Near Registrar Office, Pantnagar</p>
                                <p><i class="fas fa-phone"></i> Phone: (+91) 8574124578</p>
                                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                                <p><i class="fab fa-skype"></i> Skype: you_online</p>
                                <br><br>
                            </div>
                            <div class="col-lg-4">
                                <h3>Links</h3>
                                <p><i class="fa fa-home"></i> <a href="home.php">Home</a></p>
                                <p><i class="fa fa-envelope"></i> <a href="messages.php">Messages</a></p>
                                <p><i class="fa fa-users"></i> <a href="student-details.php">Student Details</a></p>
                                <p><i class="fa fa-user"></i> <a href="profile.php">Profile</a></p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12" style="text-align: justify;">
                                <h3>ABOUT US!</h3> It is a placement cell portal for GB pant university of Agriculture & Technology.
                                Now you can find all student's details through this web portal.

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
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