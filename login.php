<?php
ob_start();
session_start();

$uname = $_POST['name'];
$password= $_POST['password'];
$shadow = `sudo cat /etc/shadow`;
$data = '<pre>'.$shadow.'<pre>';
$x = explode("\n",$data);
list($a,$b,$c) = explode(":", $x[0]);
$full_pass = $b;
//echo $full_pass;
$salt = substr($full_pass,0,11);
//echo '<br>'.$salt;
$crypted_pass = crypt($password, $salt);
//echo '<br>'.$crypted_pass;

if($uname != "root")
{
	$a = "not_root";
	$_SESSION['flag'] = $a;
	header("location:index.php");
}

else if($uname == "root" && $full_pass!=$crypted_pass)
{
	$a= "wrong_input";
	$_SESSION['flag'] = $a;
	header("location:index.php");
}
else if($uname == "")
{
	$a= "empty";
	$_SESSION['flag'] = $a;
	header("location:index.php");
}

else
{
	 $a= "allowed";
	$_SESSION['flag'] = $a;
	header("location:home.php");

}




