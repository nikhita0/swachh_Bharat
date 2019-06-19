<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");
 $Date=$_POST['Date'];
 $Loc_name=$_POST['Loc_name'];
 $Money_spent=$_POST['Money_spent'];
 
 
 
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}

 
$sql = "INSERT INTO money (Date,Loc_name,Money_spent)
              VALUES('".$Date."', '".$Loc_name."', '".$Money_spent."') ";
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
<head></head><form action="mdisp.php" method="POST">details<input type="submit" value="details"></form></html>