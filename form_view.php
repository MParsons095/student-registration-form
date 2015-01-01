<!DOCTYPE html>
<html lang="en">
	<head>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		 <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Student Registration Form</title>
		<link rel="stylesheet" href="public/css/style.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="public/js/script.js"></script>
	</head>
	<body>
		<div id="banner">
			<h1>student Registration Form</h1>
		</div>
		<div id="wrapper">
			<div class="notice">
				<p><i>The fields marked with ( * ) are <span>required</span>.</i></p>
			</div>
			<div class="row">
				<div class="column-shift-half-col column-3">
					<div id="form_container">
						<form action="" method="post">
							<h2>Personal Information</h2>
							<div class="row">
								<div class="column-2">
									<label for="student_id"><span>*</span> Student ID</label>
									<input type="text" name="student_id" />
								</div>
							</div>

							<div class="row">
								<div class="column-1">
									<label for="first_name"><span>*</span> First Name</label>
									<input type="text" name="first_name" />
								</div>
								<div class="column-1">
									<label for="middle_name">Middle Name</label>
									<input type="text" name="middle_name" />
								</div>
								<div class="column-1">
									<label for="last_name"><span>*</span> Last Name</label>
									<input type="text" name="last_name" />
								</div>
							</div>


							<h2>Contact Information</h2>
							<div class="row">
								<div class="column-1">
									<label for="email"><span>*</span> Email</label>
									<input type="text" name="email" />
								</div>
								<div class="column-1">
									<label for="home_phone">Home Phone</label>
									<input type="text" name="home_phone" />
								</div>
								<div class="column-1">
									<label for="cell_phone">Cell Phone</label>
									<input type="text" name="cell_phone" />
								</div>
							</div>

							<div class="row">
								<div class="column-2">
									<label for="street_address"><span>*</span> Street Address</label>
									<input type="text" name="street_address" />
								</div>
							</div>

							<div class="row">
								<div class="column-1">
									<label for="city"><span>*</span> City</label>
									<input type="text" name="city" />
								</div>
								<div class="column-1">
									<label for="state"><span>*</span> State (Abbr Only)</label>
									<input type="text" name="state" />
								</div>
								<div class="column-1">
									<label for="zip"><span>*</span> Zip</label>
									<input type="text" name="zip" />
								</div>
							</div>

							<h2>Course Registration</h2>
							<div id="courses">
								<div class="notice">
									<p><b>Loading...</b></p>
								</div>
							</div>


							<div class="row">
								<div class="column-shift-1 column-1">
									<input type="hidden" name="_csrf_token" value="<?php print $_SESSION['_csrf_token']; ?>" />
									<input type="submit" value="Register" name="submit_registration" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>