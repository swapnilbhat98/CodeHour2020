<?php
  include('../config.php');

  if(!isset($_SESSION['userLoggedIn']))
  	header('Location: ../index.php');

  $pcode = $_GET['pcode'];
  $problemQuery = "SELECT * FROM problems WHERE pcode = '$pcode'";
  $success = mysqli_query($con,$problemQuery);
  $row = mysqli_fetch_array($success);
  $year = $row[2];

  if(isset($_POST['submit'])){
  	$solution = $_POST['solution'];
  	$extn =".". $_POST['language'];
  	$tmp = "solutions/".$year."/";
  	$filename =$tmp.$_SESSION['currentUserId'].$pcode.$extn;
    
  	$myfile = fopen($filename, "w");
  	fwrite($myfile, $solution);
  	$sub = $row[5];
  	$sub++;
  	$updateQuery = "UPDATE problems SET psubmission = '$sub' WHERE  pcode = '$pcode'";
  	$success = mysqli_query($con,$updateQuery);
  }




?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<title>Problem</title>
</head>
<body>

	<!--Header-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="../index.php"><img src="../assets/images/logo-3.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Menu bar -->
  

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
      
      <li class="nav-item active" style="margin-left: 1000px;">
        <a class="nav-link" href="logout.php?logout"><i>Logout</i></a>
      </li>
     </ul>
    </div>
</nav>

<!--Main Body-->

 <p id="timer" style="text-align: right;"></p>
 	<br><br>
 <div class="container">
 	<h2><?php echo $row[3];?></h2>
 	<br>
 	<p><?php echo $row[4];?></p>

 	<form method="post">

 		 <input type="radio" name="language" value="c">
 		 <label style="width: 33%;">C</label>
 		 <input type="radio" name="language" value="java">
 		 <label style="width: 33%;">Java</label>
 		 <input type="radio" name="language" value="py">
 		 <label style="width: 20%;">Python</label>

 		

 		<h2>Submit Your Solution Here</h2>
 		<textarea class="form-control" name="solution" id="solution" rows="30"></textarea>
 		<br>
 		<p>
			<button type ="submit" name="submit" style="color: black; background-color: yellow; text-align: center; width: 100%;">Click to Submit</button>
		</p>
 		
 	</form>
 	
 </div>

<script type="text/javascript" src="../assets/js/timer.js"></script>

</body>
</html>