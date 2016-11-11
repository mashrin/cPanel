
<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{

$sub = $_POST['sub'];
//echo $sub;

if($sub == "off")
	{
		$x = `sudo init 0`;
		echo $x;
		echo "Shuting Down Server...." ;
	}
if($sub == "reboot")
	{
		$x=`sudo init 6`;
		echo $x;
		echo "rebooting Server...";
	}
}
else
header("location:index.php");
?>