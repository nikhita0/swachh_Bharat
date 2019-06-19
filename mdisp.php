<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");
 
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
$sql = "select Money_spent from money";
    if ($mysqli->query($sql) === true)
{
    echo "You Are Registered Now,";
}
$result = $mysqli->query($sql);
if ($result->num_rows > 0) 
{
    echo "<table border=2><tr><th>Money_spent</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
echo "<tr><td>".$row["Money_spent"]."</td></tr>";
	}
echo "</table>";
} 
else 
{
    echo "0 results";
}
$mysqli->close();
?><html>
<head></head><h1>Thank You</h1></html>