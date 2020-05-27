<?php
   include('config.php');
   include('includes/handlers/login-handler.php');
   
    if(isset($_SESSION['userLoggedIn']))
   
   
    header('Location: includes/home.php');
   
   $errorArray = array();
   $errorArray['invalidLogin']="";

   

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<title>CodeChef</title>
</head>
<body>
  <!--Header-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php"><img src="assets/images/logo-3.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Menu bar -->
  

  <div class="collapse navbar-collapse menubar" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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

<!-- Main body-->

<div class="container">
	<div class="row">
		<!--about us-->
		<div class="col-md-9 aboutus">
			
		
		<h1>What is CodeChef</h1>
		<p>
			CodeChef is a not-for-profit educational initiative by Directi, an Indian software company. It is a global programming community that fosters learning and friendly competition, built on top of the world’s largest competitive programming platform. We have also built a large community of problem curators.

            CodeChef was created as a platform to help programmers make it big in the world of algorithms, computer programming and programming contests. We host three featured contests every month and give away prizes and goodies to the winners as encouragement. Apart from this, the platform is open to the entire programming community to host their own contests. Major institutions and organizations across the globe use our platform to host their contests. On an average, 30+ external contests are hosted on our platform every month.

            We also partner with colleges and groups to create local CodeChef Chapters, meet-ups, orientation sessions, programming workshops. In addition, we sponsor coding contests and teams of Indian programmers as part of our Go for Gold Initiative.</p>
			
		</div>


		<!--login zone-->
        
        <div class = "col-md-3 loginzone">
            <h1>Login Zone</h1>
        	
          
          <form method="post">
        		<label>Email</label><br>
        		<input type="text" name="email"><br>
        		<label>Password</label><br>
        		<input type="password" name="password">
        		<br><br>
        		<button type="submit" name="submit">Login</button>


           
        	</form><br>
          <p><i>
            
            <?php echo $errorArray['invalidLogin']; ?>
          </i>
          </p>
           
           
          <!--
           <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">I am not a robot</label>
            </div>
            <button type="submit" name="submit">Login</button>
           </form>   
           -->   






            <br>
        	<p>
        		New User? Sign Up<a href="includes/register.php" style="color: white"><i> Here</i></a>

             </p>
        </div>

		
	</div>
	
</div>






	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>