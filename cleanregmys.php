<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");

 $ad=$_POST['ad'];
 
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
 
$sql = "SELECT Loc_name from rejected_place where Pin_no in(SELECT Pin_no from Location where Ad_no in(SELECT Aadhar_no from citizen where Aadhar_no=".$ad."))";


    if ($mysqli->query($sql) === true)
{
    echo "Complaint Registered Now,";
}
$sql = "SELECT * FROM rejected_place  where Loc_name='Mysore' group by pin_no";
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