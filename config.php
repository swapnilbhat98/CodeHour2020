<?php
   ob_start();
   session_start();

   //this code is to connect with db

   $timezone = date_default_timezone_set("Asia/Kolkata");
   $con = mysqli_connect("localhost","root","","codechef");


if(mysqli_connect_errno()){
	echo "Failed to Connect".mysqli_connect_errno();
}

?>