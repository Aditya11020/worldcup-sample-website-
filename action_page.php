<?php
$servername="sql104.epizy.com";
$username="epiz_29326169";
$password="aditya1102";
$dbname="epiz_29326169_newusers";

$fname=$_REQUEST["firstname"];
$lname=$_REQUEST["lastname"];
$stand=$_REQUEST["country"];
$uniqueno=$_REQUEST["numberr"];


$conn=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysql_error());
}
else{
 echo "connection successfully";
}
 $sql="INSERT INTO `users` (fname,lname,stand,uniqueno) VALUES ('$fname','$lname','$stand','$uniqueno')";
 if($conn->query($sql)==true){
	 echo "new record created successfully";
	 header("Location: worldcup6.html");
 }
 else{
	 echo "Error".$sql."<br>".$conn->error;
 }
 ?>