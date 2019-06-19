<?php
$usr=$_POST[username];
$pwd=password;

if($usr==""&&$pwd=="")
{
	
}
else
{
	alert(login failed!!!!!);
}
/*$mysqli = new mysqli("localhost", "username", "password", "dbname");*/
?>

<html>
<body>
<?php
if(isset($_POST['signin'])) 
{
	include 'wmsdb.php';	
	$flag=0;
	$usr=$_POST["username"];
	$password=$_POST["password"];
	if(strcmp($username,'citi01')==0 && strcmp($password,'citi1')==0)
	{
		header('location:wmsadmin.php');
	}

	else{
	$q="select * from users where email='$username'";
	$r=mysql_query($q);
	/*
	while($row=mysql_fetch_array($r))
	{
		$pwdfromdb=$row["password"];
		if(strcmp($pwdfromdb,$password)==0)
		{
			$flag=1;
		}
	}
	if($flag==1)
	{
    $_SESSION["email"]=$email;
    $_SESSION["compid"]="";
		header('location:userhome.php');
	}
	else{
		echo "<script type='text/javascript'> alert('login failed....')</script>";
	}*/}
mysql_close();
}}
?>	
   </body></html>
   /*$result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["name"]. "<br>";
            }
         } else {
            echo "0 results";
         }*/
   
   
   /*if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
		 else{
         echo 'Connected successfully<br>';}*/
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 <!--<?php/*
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbconn = mysqli_connect($dbhost,$dbuser,'','sbharat');
//mysqli_select_db("payroll");
if (isset($_POST['submit']))
{
    $names=$_POST['name'];
    $Aadhar_no=$_POST['adhar'];
    $locations=$_POST['location'];
    $Pin_no=$_POST['pincode'];
    $Ph_no=$_POST['phone'];
    $User_name=$_POST['username'];
	$Password=$_POST['password'];
	$query=("INSERT INTO citizen VALUES('".$Aadhar_no."','".$usernames."','".$Pin_no."','".$Ph_no."','".$Password."');");
	$result=mysqli_query($dbconn,$query);
	print_r($result);
	echo "inserted successfully!";
 }*/
?>--><!--
<?php/*
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'sbharat';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   $query= ("INSERT INTO admin VALUES ('".$e_id."','".$date."','".$time."','".$type."','".$name."','".$money."');");
	$result=mysqli_query($dbconn,$query);
	print_r($result);
	echo "inserted successfully!";
         
         $sql = "CREATE TABLE test(name varchar(10))";
		 if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
         
         mysqli_close($conn);
      */?>-->
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");
 
 
 
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
else{
	echo "gud job";
}
 
$sql = "INSERT INTO admin (Ad_no, User_name, Password, Loc_name, C_no)
              VALUES('a12', 'admin12', 'admin12', 'Mysore', 'c12') ";
    if ($mysqli->query($sql) === true)
{
    echo "Records inserted successfully.";
}
else
{
    echo "ERROR: Could not able to execute $sql. "
           .$mysqli->error;
}
 
// Close connection
$mysqli->close();
?><html>
<head></head><body><h2>ert</h2></body></html>



<form action="vcomp.html" method="POST">
<input type="submit" value="Register_Complaint"><br><br></form>

<form action="table5.html">
<input type="submit" value="View_Complaint">
</form>



<?php
 $mysqli = new mysqli("localhost", "root", "", "sbharat");
 $result = mysql_query("SELECT * FROM complaint");
if ($mysqli === false) {
    die("ERROR: Could not connect. ".$mysqli->connect_error);
}
?>
<!DOCTYPE html><html><head></head><body>
<table border="2">
   <tr>
      <th>Complaint no</th>
      <th>Pin number</th>
      <th>Location</th>
    </tr> <?php   while ($array = mysql_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> </tr></table>";
    }
// Close connection
$mysqli->close();
?></body></html>