<!DOCTYPE html>
<html>
<head>
<!--<style>
table, th, td {
    border: 1px solid black;
}
</style>-->
</head>
<body>
<?php
//include 'donerun.php';
// Create connection
$mysqli = new mysqli("localhost", "root", "", "sbharat");
if ($mysqli === false) 
{
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
$sql = "SELECT * FROM complaint where Loc_name="mysore";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) 
{

    echo "<table border=2><tr><th>C_no</th><th>Pin_no</th><th>Location</th><th>Type_of_waste</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
echo "<tr><td>".$row["C_no"]."</td><td>".$row["Pin_no"]."</td><td>".$row["Loc_name"]."</td><td>". $row["Type_of_waste"]. "</td></tr>";
	}
echo "</table>";
} 
else 
{
    echo "0 results";
}
$mysqli->close();
?> 
</body>
</html>



