<?php 
  
   
   include('../config.php');

   if(!isset($_SESSION['userLoggedIn']))
    header('Location: ../index.php');

   $currentUserId = $_SESSION['currentUserId'];

   $userDetailsQuery = "SELECT * FROM userdetails WHERE uid = '$currentUserId'";
   $success = mysqli_query($con,$userDetailsQuery);
   $userDetailsRow = mysqli_fetch_array($success);

   


?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
   <title>Home</title>
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
    echo "<h2>Hola ".$userDetailsRow[1]."  !</h2>"
       ?>



      <?php echo "<img src = '../assets/images/user-images/".$userDetailsRow[5]."'>";?>
       <br><br>
       <h3>Winter is Here! Now Code</h3>
       <p>
         Are you ready for being the ultimate champion in coding?Well,you have taken the first step of registration.Now time for getting the rules cleared.
       </p>
       <h3>Rules of the contest</h3>
       <br>
       
       
       
       <ol>
         <li>You are supposed to code in C/Java/Python Only.</li>
         <li>The contest time is 60 minutes.You will be given a reading time of 15 minutes extra.</li>
         <li>The conmtest will start exactly at 12:15 PM on 5th January,2020.</li>
         <li>The below button is disabled and will be enabled exactly when the contest starts.Refresh the page after 12:15pm to begin.</li>
       </ol>
       <form action="contest.php" method="post">
         <button style="width: 400px; background-color: #ebb734; color: black;" >Start Contest</button>
       </form>
       
  </div>


</body>
</html>