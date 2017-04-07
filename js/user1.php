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
<body>
<center>
<img src="image_gallery.png" />
<hr />
<ul class="nav nav-pills nav-justified">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">System</a></li>
  <li class="active"><a href="server.php">Servers</a></li>
   <li><a href="networking.php">Networking</a></li>
    <li><a href="other.php">Other</a></li>
</ul>
<hr />

</center>
<?php
$sub = $_POST['sub'];
$name = $_POST['name'];
if($sub=="sub1")
  {
	echo $name;
  }
  
if($sub=="sub2")
  {
   echo '<ol class="breadcrumb col-xs-offset-1">
  <li><a href="index.php">Home</a></li>
  <li><a href="server.php">Servers</a></li>
  <li class="active">DeleteUser</li>
</ol> <br>';
    $x = `sudo userdel -r $name`;
	echo $x;
    echo '<h4 class="col-xs-offset-1"> User '.$name.' succesfully deleted</h4>';

  }

?>