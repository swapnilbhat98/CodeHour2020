<?php
  if(isset($_POST['submit']))
  {
  	$uname = $_POST['uname'];
  	$ucollege = $_POST['ucollege'];
  	$ucontact = $_POST['ucontact'];
  	$uemail = $_POST['uemail'];
  	$upassword = $_POST['upassword'];
    $uyear = $_POST['uyear'];
    $uother = $_POST['other'];
    $filename = $_FILES['uimage']['name'];
    $imgDest = "../assets/images/user-images/".$filename;
    move_uploaded_file($_FILES['uimage']['tmp_name'], $imgDest);
    

    

    
    if($ucollege == -999)
    {
      $q = "INSERT INTO colleges(cname) VALUES ('$uother')";
      $s = mysqli_query($con,$q);
      $q = "SELECT cid FROM colleges WHERE cname='$uother'";
      $s = mysqli_query($con,$q);
      $r = mysqli_fetch_array($s);
      $ucollege = $r[0];
      

    }

  	$registerQueryLogin = "
     INSERT INTO userlogin (uemail,upassword) VALUES ('$uemail','$upassword')";

     $registerQueryDetails = "INSERT INTO userdetails(uname,ucollege,ucontact,uyear) VALUES ('$uname','$ucollege','$ucontact',$uyear)";

     $success = mysqli_query($con,$registerQueryLogin);
     $success1 = mysqli_query($con,$registerQueryDetails);

     if($success && $success1){
     	 echo "Registration Successful ! Go back to Login!!";
       //$q = "SELECT uid FROM userlogin WHERE uemail = '$uemail' AND upassword = '$upassword'";
       //$s = mysqli_query($con,$q);
       //$r = mysqli_fetch_array($s);
       //$id = $r[0];
       //echo $_FILES['uimage'];
       //$pinfo = pathinfo($_FILES['uimage']['name']);

       //$extn = $pinfo['extension'];
       //$imgDest = "../assets/images/user-images/".$id.".".$extn;
       
        }
        else
          echo "Error in registration";


  }

?>