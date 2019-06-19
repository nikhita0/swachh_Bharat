<?php
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
echo "blablablablablablabablablablablablbabala"
?>

