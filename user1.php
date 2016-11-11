<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{



$sub = $_POST['sub'];
$name = $_POST['name'];
$pass = $_POST['password'];
$check_user = `cat /etc/passwd | grep $name`;


if($sub=="sub1")
  {
	if($check_user)
	{
		echo '<label class="alert alert-danger"> User <b>'.$name.'</b> already exists!!</label>';
	  
	 
	}
	else
	{
	
	 echo '<ol class="breadcrumb col-xs-offset-1">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">AddUser</li>
</ol> <br>';
	
	$cmd = `sudo useradd $name`;
	$cmd1 = `echo $pass | sudo passwd --stdin $name`;
	
	 echo '<label class="alert alert-success"> User <b>'.$name.'</b> succesfully Added!!</label>';
	}
  }
  
if($sub=="sub2")
  {
	  if($check_user)
	{
		
		 echo '<ol class="breadcrumb col-xs-offset-1">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">DeleteUser</li>
</ol> <br>';

    $x = `sudo userdel -r $name`;
	echo $x;
    echo '<label class="alert alert-success"> User <b>'.$name.'</b> succesfully Deleted</label>';
	  
	 
	}
	else
	{
       echo '<label class="alert alert-danger"> User <b>'.$name.'</b> does not exist!!</label>';
	}
  }


}
else
header("location:index.php");
?>