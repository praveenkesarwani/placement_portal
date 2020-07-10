<?php
require '../includes/config.inc.php';
$user = $_SESSION['admin'];
if(!$user==true){
    header("Location:../index.php?error=strangeerr");
}
?>
<html>

<head>
    <title>Resume</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="icon" href="../img/favicon.png" type="image/png" sizes="16x16">

    <!-- css-->
    <link rel="stylesheet" href="..\css\resume.css">
    <link rel="stylesheet" href="..\css\style.css">
    <!-- css-->
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--bootstrap css-->

    <!--bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!--bootstrap js-->
    <!--Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <!--Header-->
    <header>
        <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark ">
            <h1>
                <a class="navbar-brand" href="home.php" id="navbar-logo">
                    <img src="..\img\logo.png" alt="Logo" id="nav-logo">
                    <span class="display"></span></a>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" style=" font-size:18px; ">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">
                            <i class="fa fa-home"></i>
                            Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="resume.php">
                            <i class="fa fa-file">
                            </i>
                            Resume
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="student-details.php">
                            <i class="fa fa-users">
                            </i>
                            Student Details
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="../includes/logout.inc.php">
                            <i class="fa fa-sign-out"></i>
                            Logout
                        </a>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--Contents-->
    <section class="contact py-5">
        <div class="container">
            <div class="search">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class='col-md-12 col-xs-12'>
                        <div class="form-group">
                            <Input type="text" class="form-control" name="search_box" placeholder="Search by ID Number" required>
                        </div>
                        <button type="submit" class="btn btn-default" name="search">Search</button>
                </form>
            </div>
        </div>
    </section>
    <!--Contents-->

    <?php
    if (isset($_POST['search'])) {
        $search_box = $_POST['search_box'];
        $query_search = "SELECT * FROM studentinfo WHERE college_id =  '$search_box'";
        $result_search = mysqli_query($conn, $query_search);
    ?>
        <div class="container resume-content">
            <tbody>
                <?php
                if (mysqli_num_rows($result_search) == 0) {
                    echo '<tr><td colspan="4">No Record Found</td></tr>';
                } else {
                    while ($row_search = mysqli_fetch_assoc($result_search)) {

                ?>
                    <!--contents-->
                    <div class="container">
                        <section class="upper">
                            <h2 class="uppercase"><?php echo $row_search['firstname'] . " " . $row_search['lastname']; ?></h2>
                            <address> <i>
                                    <?php echo $row_search['address']; ?>
                                </i>
                            </address>
                            <p> Mobile No : <?php echo $row_search['contact']; ?></p>
                            <p> E-MAIL : <?php echo $row_search['email']; ?></p>
                        </section>
                        <!--Lower section-->
                        <section class="lower">
                            <table class="table table-bordered">
                                <thead>
                                    <!--ID Number-->
                                    <tr>
                                        <th scope="col">ID Number</th>
                                        <td colspan="3"><?php echo $row_search['college_id']; ?></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Objective-->
                                    <tr>
                                        <th scope="row">Objective</th>
                                        <td colspan="3"><?php echo $row_search['objective']; ?></td>
                                    </tr>
                                    <!--Degree & Branch-->
                                    <tr>
                                        <th scope="row">Degree & Branch</th>
                                        <td colspan="3"><?php echo $row_search['discipline']; ?> &nbsp&nbsp&nbsp&&nbsp&nbsp <?php echo $row_search['branch']; ?></td>
                                    </tr>
                                    <!--Date of Birth-->
                                    <tr>
                                        <th scope="row">DOB</th>
                                        <td colspan="3"><?php echo $row_search['dob']; ?></td>
                                    </tr>
                                    <!--educational record-->
                                    <tr>
                                        <th scope="row">Education Record</th>
                                        <td colspan="3">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Examination</th>
                                                        <th>Board</th>
                                                        <th>% Marks</th>
                                                        <th>Passing Year</th>
                                                        <th>Division</th>
                                                    </tr>
                                                    <th>X</th>
                                                    <td><?php echo $row_search['x_board']; ?></td>
                                                    <td><?php echo $row_search['x_marks']; ?></td>
                                                    <td><?php echo $row_search['x_year']; ?></td>
                                                    <td><?php echo $row_search['x_division']; ?></td>
                                                    <tr>
                                                        <th>XII</th>
                                                        <td><?php echo $row_search['xii_board']; ?></td>
                                                        <td><?php echo $row_search['xii_marks']; ?></td>
                                                        <td><?php echo $row_search['xii_year']; ?></td>
                                                        <td><?php echo $row_search['xii_division']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th><?php echo $row_search['discipline']; ?></th>
                                                        <td>AICTE (GBPUA&T)</td>
                                                        <td><?php echo $row_search['cgpa']; ?></td>
                                                        <td><?php echo $row_search['grad_year']; ?></td>
                                                        <td><?php echo $row_search['grad_div']; ?></td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </td>
                                    </tr>
                                    <!--Practical training-->
                                    <tr>
                                        <th rowspan="2">Practical Training</th>
                                        <th>Name of Organization</th>
                                        <th>Project</th>
                                        <th>Duration</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row_search['organization']; ?></td>
                                        <td><?php echo $row_search['project']; ?></td>
                                        <td><?php echo $row_search['duration']; ?> Days</td>
                                    </tr>
                                    <!--Skills-->
                                    <tr>
                                        <th scope="row">Computer skills</th>
                                        <td colspan="3"><?php echo $row_search['skill']; ?></td>
                                    </tr>
                                    <!--Hobbies-->
                                    <tr>
                                        <th scope="row">Hobbies</th>
                                        <td colspan="3"><?php echo $row_search['hobbies']; ?></td>
                                    </tr>
                                    <!--Any others relevant information-->
                                    <tr>
                                        <th scope="row">Any others relevant information</th>
                                        <td colspan="3"><?php echo $row_search['comment']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6>I certify that the information given above is true to the best of my knowledge and belief.</h6>
                            <p class="sign uppercase"><?php echo $row_search['firstname'] . " " . $row_search['lastname']; ?></p>
                        </section>
                    </div>
                <?php
                }
            }
                ?>
        </div>
    <?php
    }
    ?>

    <!-- js-scripts -->

    <!-- js -->
    <script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
    <!-- //js -->

    <!-- banner js -->
    <script src="web_home/js/snap.svg-min.js"></script>
    <script src="web_home/js/main.js"></script> <!-- Resource jQuery -->
    <!-- //banner js -->

    <!-- flexSlider -->
    <!-- for testimonials -->
    <script defer src="web_home/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
    <!-- for testimonials -->

    <!-- start-smoth-scrolling -->
    <script src="web_home/js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="web_home/js/move-top.js"></script>
    <script type="text/javascript" src="web_home/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>

</body>

</html>