<?php 
  
   
   include('../config.php');

   if(!isset($_SESSION['userLoggedIn']))
    header('Location: ../index.php');

   $currentUserId = $_SESSION['currentUserId'];

   $userDetailsQuery = "SELECT * FROM userdetails WHERE uid = '$currentUserId'";
   $success = mysqli_query($con,$userDetailsQuery);
   $userDetailsRow = mysqli_fetch_array($success);
   $uyear = $userDetailsRow[4];

   $problemQuery = "SELECT * FROM problems WHERE pyear = '$uyear'";
   $success = mysqli_query($con,$problemQuery);
   $p_count = mysqli_num_rows($success);


   


?>




<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<title>Contest</title>
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

 <div class="container">

 	<?php 
        echo "<h2>Hi"." ".$userDetailsRow[1]."!</h2>";

 	?>

 	<p id="timer" style="text-align: right;"></p>
 	<br><br>

 	<table class="table" style="color:white; text-align: center;" >
  <thead class="thead-light">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Statement</th>
      <th scope="col">Total Submissions</th>
      
    </tr>
  </thead>
  <tbody>
    


    	<?php 

          while($p_count!=0){
            $row = mysqli_fetch_array($success);
          	$pcode = $row[1]; 
          	echo "
                
                <tr>
                <th scope='row' class='ques'>
                <a href = 'question.php?pcode=".$pcode."'target='_blank'>".$row[1]."</a>
                </th>
                <td>".$row[3]."</td>
                <td>".$row[5]."</td>
                </tr>






          	";
          	$p_count--;
          }

    	?>
      

      
      
    
    
  </tbody>
</table>
 	
 </div>
 <script type="text/javascript" src="../assets/js/timer.js"></script>
</body>
</html>