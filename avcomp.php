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

function process($pin)
{
$mysqli = new mysqli("localhost", "root", "", "sbharat");



if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}

$sql = "INSERT INTO cleaned_place (Pin_no)
              VALUES('".$pin."') ";
    if ($mysqli->query($sql) === true)
{
    echo "cleaned place location succesfly registered into cleaned_place";
}
else
{
    echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error;
}
 
// Close connection
$mysqli->close();
}


$mysqli = new mysqli("localhost", "root", "", "sbharat");
if ($mysqli === false) 
{
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
$sql = "SELECT * FROM complaint";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) 
{

    echo "<table border=2><tr><th>C_no</th><th>Pin_no</th><th>Location</th><th>Type_of_waste</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
		$pin=$row["Pin_no"];
echo "<tr><td>".$row["C_no"]."</td><td>".$row["Pin_no"]."</td><td>".$row["Loc_name"]."</td><td>". $row["Type_of_waste"]. "</td><td><form><input type='button' value='done' onclick='process($pin);'/></form></td></tr>";
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



