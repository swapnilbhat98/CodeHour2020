<?php
	include('../config.php');
	include('handlers/register-handler.php');

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<title>Register</title>
</head>
<body>
<!-- Header -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="../index.php"><img src="../assets/images/logo-3.png"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Menu Bar -->

	  <div class="collapse navbar-collapse menubar" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">About Us</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Colleges</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Contact Us</a>
	      </li>
	    </ul>
	  </div>
	</nav>

<!-- Main Body -->
	
	<h1>Register Here</h1>
	<br>
	<div class="registrationForm">
		<form method="post" enctype="multipart/form-data">
			<p>
				<label>Full Name : </label>
				<input type="text" name="uname">
			</p>
			<p>
				<label>College : </label>
				<select name="ucollege" id="ucollege">
					<option value="0">---Select Your College---</option>
					<option value="1">Heritage Institute of Tech</option>
					<option value="2">IEM Kolkata</option>
					<option value="3">Techno India University</option>
					<option value="4">Jadavpur University</option>
					<option value="5">MAKAUT</option>
				</select>
			</p>
			<p>
				<label>Year : </label>
				<select name="uyear" id="uyear">
					<option value="0">---Select Your Year---</option>
					<option value="1">1st Year</option>
					<option value="2">2nd Year</option>
					<option value="3">3rd Year</option>
					<option value="4">4th Year</option>
					<option value="5">5th Year</option>
				</select>
			</p>
			<p>
				<label>Contact Number: </label>
				<input type="text" name="ucontact">
			</p>
			<p>
				<label>Email: </label>
				<input type="email" name="uemail">
			</p>
			<p>
				<label>Password: </label>
				<input type="password" name="upassword">
			</p>
			<p>
				<label>Upload Profile Image</label>
    			<input type="file" id="uimage" name="uimage" style="width: 200px;">
			</p>
			<p>
				<button type="submit" name="submit">Register</button>
			</p>
			
		</form>
	</div>



</body>
</html>