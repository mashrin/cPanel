<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{



$sub = $_POST['sub'];
$name = $_POST['name'];
$check_grp = `cat /etc/group | grep $name`;


if($sub=="sub1")
  {
	if($check_grp)
	{
		echo '<label class="alert alert-danger"> Group <b>'.$name.'</b> already exists!!</label>';
	  
	 
	}
	else
	{
	
	 echo '<ol class="breadcrumb col-xs-offset-1">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">Add Group</li>
</ol> <br>';
	
	$cmd = `sudo groupadd $name`;
	
	 echo '<label class="alert alert-success"> Group <b>'.$name.'</b> succesfully Added!!</label>';
	}
  }
  
if($sub=="sub2")
  {
	  if($check_grp)
	{
		
		 echo '<ol class="breadcrumb col-xs-offset-1">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">Delete Group</li>
</ol> <br>';

    $x = `sudo groupdel $name`;
    echo '<label class="alert alert-success"> Group <b>'.$name.'</b> succesfully Deleted</label>';
	  
	 
	}
	else
	{
       echo '<label class="alert alert-danger"> Group <b>'.$name.'</b> does not exist!!</label>';
	}
  }


}
else
header("location:index.php");
?>