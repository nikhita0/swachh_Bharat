<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");
 $C_no=$_POST['cno'];
 $Pin_no=$_POST['pin'];
 $Loc_name=$_POST['loc'];
 $Type_of_waste=$_POST['type'];
 
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
 
$sql = "INSERT INTO complaint (C_no,Pin_no,Loc_name,Type_of_waste)
              VALUES('".$C_no."', '".$Pin_no."', '".$Loc_name."', '".$Type_of_waste."')";
    if ($mysqli->query($sql) === true)
{
    echo "Complaint Registered Now,";
}
else
{
    echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error;
}

// Close connection
$mysqli->close();

?><html>
<head></head><body><h2>Thank You!</h2></body></html>