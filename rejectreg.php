<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");

 $adno=$_POST['adno'];
 
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
 
$sql = "SELECT Loc_name from Rejected_place where Pin_no in(SELECT Pin_no from Location where Ad_no in(SELECT Ad_no from Admin where Ad_no=".$adno."))";


    if ($mysqli->query($sql) === true)
{
    echo "Complaint Registered Now,";
}
$sql = "SELECT * FROM Rejected_place";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) 
{

    echo "<table border=2><tr><th>Pin_no</th><th>Location</th><th>Type_of_waste</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
	
echo "<tr><td>".$row["Pin_no"]."</td><td>".$row["Loc_name"]."</td><td>". $row["Type_of_waste"]. "</td></tr>";
	}
echo "</table>";
} 
else 
{
    echo "0 results";
}


// Close connection
$mysqli->close();

?><html>
<head></head><body><h2>Thank You!</h2></body></html>