<?php
include 'connection.php';
$name=$_POST["name"];
$password=$_POST["password"];
$result= mysqli_query($con,"select * from details where name='$name' and password='$password';");
$nrow=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
echo $row[1];
?>