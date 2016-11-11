<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{

$ip=$_POST['ip'];
echo $ip;
$abc = `ping -c 4 $ip`;
echo '<div class="container"><pre>'.$abc.'</pre></div>';
}
else
header("location:index.php");
?>