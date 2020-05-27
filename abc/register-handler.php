<?php
	
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$ucollege = $_POST['ucollege'];
		$ucontact = $_POST['ucontact'];
		$uemail = $_POST['uemail'];
		$upassword = $_POST['upassword'];
		$uyear = $_POST['uyear'];
		$info = $_FILES['uimage']['name'];
		$target = '../assets/images/user-images/'.$info;
		move_uploaded_file($_FILES['uimage']['tmp_name'], $target);

		$uimage = '../assets/images/user-images/'.$info;

		$registerQueryLogin = "INSERT INTO userlogin (uemail,upassword) VALUES ('$uemail','$upassword')";

		$registerQueryDetails = "INSERT INTO userdetails(uname,ucollege,ucontact,uyear,uimage) VALUES ('$uname','$ucollege','$ucontact','$uyear','$uimage') ";

		$success = mysqli_query($con,$registerQueryLogin);

		$success1 = mysqli_query($con,$registerQueryDetails);

		if($success && $success1)
			echo "Registration Successful! Go back to Login!";
		else
			echo "Error in registraton";


	}

?>
