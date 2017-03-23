<?php
ob_start();
session_start();

if($_SESSION['flag']=="allowed")
{
echo '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<script src="js/bootstrap.min.js"> </script>
<script src="js/bootstrap.js"></script>
<title>NetMin</title>
</head>

<body rightmargin="10%">
<br />

<p align="right">
<a href="logout.php" class="btn btn-primary" >Logout</a>&nbsp; &nbsp; &nbsp; 
</p>
<center>
<img src="image_gallery.png" />


<hr />
<ul class="nav nav-pills nav-justified">
  <li><a href="home.php">Home</a></li>
  <li><a href="system.php">System</a></li>
  <li><a href="server.php">Servers</a></li>
   <li><a href="networking.php">Networking</a></li>
    <li><a href="other.php">Other</a></li>
</ul>
<hr>';
}
else 
header("location:index.php");
?>