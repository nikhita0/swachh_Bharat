<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");
 $Aadhar_no=$_POST['adhar'];
 $User_name=$_POST['username'];
 $Pin_no=$_POST['pincode'];
 $Ph_no=$_POST['phone'];
 $Password=$_POST['password'];
 
 
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}

 
$sql = "INSERT INTO citizen (Aadhar_no,User_name,Pin_no,Ph_no,Password)
              VALUES('".$Aadhar_no."', '".$User_name."', '".$Pin_no."', '".$Ph_no."', '".$Password."') ";
    if ($mysqli->query($sql) === true)
{
    echo "You Are Registered Now,";
}
else
{
    echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error;
}
 
// Close connection
$mysqli->close();
?><html>
<head></head><body><h2><a href="e.html">click here</a>to login now!</h2></body></html>