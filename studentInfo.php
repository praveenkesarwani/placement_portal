<?php
require 'includes/config.inc.php';
error_reporting(0);
$user = $_SESSION['email'];
if (!$user == true) {
	header("Location:index.php?error=strangeerr");
}
?>
<html>

<head>
	<title>Student info</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="resume/resume.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="container-fluid contact">
		<form action="includes/student_info.inc.php" method="POST">
			<div class="row" id='SI1'>
				<div class="col-md-3" id='leftstrip'>
					<div class="contact-info">
						<img class='img-fluid' src="img\envelop.png" alt="image" />
						<h2>Student</h2>
						<h4>Placement Information</h4>
					</div>
				</div>
				<div class="col-md-9">
					<div class="contact-form">
						<!--first name-->
						<div class="form-group">
							<label class="control-label col-sm-4" for="fname">
								First Name
							</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
							</div>
						</div>
						<!--last name-->
						<div class="form-group">
							<label class="control-label col-sm-4" for="lname">
								Last Name
							</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
							</div>
						</div>
						<!--Gender-->
						<div class="form-group">
							<label class="control-label col-sm-4">Gender:</label>
							<div class='col-sm-10'>
								<label class="radio-inline"><input type="radio" name="gender" value="MALE" required> Male</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" name="gender" value="FEMALE"> Female</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" name="gender" value="OTHER"> Other</label>&nbsp &nbsp &nbsp
							</div>
						</div>
						<!--Address-->
						<div class="form-group">
							<label class="control-label col-sm-4">
								Address
							</label>
							<div class='col-sm-10'>
								<input type="text" class="form-control" id="address" placeholder="Enter your Address" name="address" required>
							</div>
						</div>
						<!--Mobile number-->
						<div class="form-group">
							<label class="control-label col-sm-2" for="contact">
								Mobile No
							</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="contact" placeholder="Contact" name="contact" required>
							</div>
						</div>
						<!--Email-->
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">
								Email
							</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
							</div>
						</div>
                        
						<!--ID number-->
						<div class="form-group">
							<label class="control-label col-sm-4" for="collid">
								College Id
							</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="collid" placeholder="College id" name="collid" required>
							</div>
						</div>
						<!--objective-->
						<div class="form-group">
							<label class="control-label col-sm-2" for="objective">
								Objective
							</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="objective" placeholder="Enter Objective" name="objective" required>
							</div>
						</div>
						<!--Discipline-->
						<div class="form-group">
							<label class="control-label col-sm-2">
								Discipline
							</label>
							<div class='col-sm-10'>
								<label class="radio-inline"><input type="radio" id='bsc' name="discipline" value="B.sc">
									B.Sc</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='msc' name="discipline" value="M.sc">
									M.Sc</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='mba' name="discipline" value="MBA">
									MBA</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='mca' name="discipline" value="MCA">
									MCA</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='mtech' name="discipline" value="M.Tech"> M.Tech</label>&nbsp &nbsp &nbsp
								<label class="radio-inline"><input type="radio" id='btech' name="discipline" value="B.Tech"> B.Tech</label>
							</div>
						</div><!-- if btech is selected -->
						<div class="form-group" id='branch'>
							<label class="control-label col-sm-2" for="branch">
								Branch
							</label>
							<div class='col-sm-10'>
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
						<!--College-->
						<div class="form-group">
							<label class="control-label col-sm-2" for="college">
								College
							</label>
							<div class='col-sm-10'>
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
						<!--Date of Birth-->
						<div class="form-group">
							<label class="control-label col-sm-4" for="dob">
								Date of Birth
							</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="dob" name="dob" required>
							</div>
						</div>
						<!--Academics-->
						<div class="form-group">
							<label class="control-label col-sm-6" for="Academics">
								Academics Details
							</label>
							<div class="form-group">
								<div class="col-sm-10">
									<table class="table table-bordered background">
										<thead>
											<tr>
												<th>Examination</th>
												<th>Board</th>
												<th>%Marks</th>
												<th>Passing Year</th>
												<th>Divisions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<!--X Details-->
												<th>X</th>
												<td>
													<select class="form-control" name='xboard' required>
														<option>C.B.S.E.</option>
														<option>I.C.S.E.</option>
														<option>Other</option>
													</select>
												</td>
												<td>
													<input type="text" class="form-control" id="xmarks" placeholder="marks" name="xmarks" required>

												</td>
												<td>
													<input type="number" max="3000" class="form-control" id="xpass" placeholder="passing year" name="xpass" required>
												</td>
												<td>
													<select class="form-control" name='xdivision'>
														<option>First</option>
														<option>Second</option>
														<option>Third</option>
													</select>
												</td>
											</tr>
											<tr>
												<!--XII Details-->
												<th>XII</th>
												<td>
													<select class="form-control" name='xiiboard' required>
														<option>C.B.S.E.</option>
														<option>I.C.S.E.</option>
														<option>Other</option>
													</select>
												</td>
												<td>
													<input type="text" class="form-control" id="xiimarks" placeholder="marks" name="xiimarks" required>

												</td>
												<td>
													<input type="number" max="3000" class="form-control" id="xiipass" placeholder="passing year" name="xiipass" required>
												</td>
												<td>
													<select class="form-control" name='xiidivision'>
														<option>First</option>
														<option>Second</option>
														<option>Third</option>
													</select>
												</td>
											</tr>
											<tr>
												<!--Graduation Details-->
												<th>Graduation</th>
												<td>
													AICTE (GBPUA&T)
												</td>
												<td>
													<input type="text" max="100" class="form-control" id="gmarks" placeholder="marks" name="gmarks" required>

												</td>
												<td>
													<input type="number" max="3000" class="form-control" id="gpass" placeholder="passing year" name="gpass" required>
												</td>
												<td>
													<select class="form-control" name='gdivision'>
														<option>First</option>
														<option>Second</option>
														<option>Third</option>
													</select>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--Practical Training-->
								<div class="form-group">
									<label class="control-label col-sm-6" for="training">
										Practical Training
									</label>
									<div class="form-group">
										<div class="col-sm-10">
											<table class="table table-bordered background">
												<thead>
													<th>Name of Organization</th>
													<th>Name of Project</th>
													<th>Duration</th>
												</thead>
												<tbody>
													<tr>
														<td>
															<!--Name of Organization-->
															<input type="text" class="form-control" id="orgName" placeholder="Name of Organization" name="orgName" required>
														</td>
														<td>
															<!--Name of Project-->
															<input type="text" class="form-control" id="projectName" placeholder="Name of Project" name="projectName" required>
														</td>
														<td>
															<!--Duration-->
															<input type="number" class="form-control" id="duration" placeholder="Number of Days" name="duration" required>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--Future Career plan-->
								<div class="form-group" id='career'>
									<label class="control-label col-sm-4" for="career">Future Career Plans</label>
									<div class='col-sm-10'>
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

								<!--Skills-->
								<div class="form-group">
									<label class="control-label col-sm-4" for="skills">
										Computer Skills
									</label>
									<div class="col-sm-10">
										<textarea class="form-control" rows="5" name='skills' id="skills" required></textarea>
									</div>
								</div>
								<!--Hobbies-->
								<div class="form-group">
									<label class="control-label col-sm-6" for="hobbies">
										Hobbies
									</label>
									<div class="col-sm-10">
										<textarea class="form-control" name='hobbies' rows="5" id="hobbies" required></textarea>
									</div>
								</div>
								<!--Extra curriculam-->
								<div class="form-group">
									<label class="control-label col-sm-6" for="comment">
										Any other Relevant
										Information:
									</label>
									<div class="col-sm-10">
										<textarea class="form-control" rows="5" name='comment' id="comment" required></textarea>
									</div>
								</div>
                                <!--Terms and condition-->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="" required>It is to certify that the
                                        information provided above is true and correct to the best
                                        of my knowledge, if any information is found to be incorrect then I am liable for
                                        suitable actions.
                                    </label>
                                </div>
								<!--Submit-->
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-default" name="submit">Submit</button>
									</div>
								</div>
							</div>
						</div>

					</div>
		</form>
	</div>

</body>
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

</html>