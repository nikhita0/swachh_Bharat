<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");
 $vno=$_POST['vno'];
 $vname=$_POST['vname'];
 $pno=$_POST['pno'];
 $comment=$_POST['comment'];
 
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
 
$sql = "INSERT INTO visitors (V_no,V_name,P_no,Comment)VALUES('".$vno."', '".$vname."', '".$pno."', '".$comment."')";
    if ($mysqli->query($sql) === true)
{
    echo "thank you. for your feedback";
}
else
{
    echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error;
}

// Close connection
$mysqli->close();

?><html>
<head></head><body></body></html>