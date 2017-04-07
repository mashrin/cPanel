<?php

$name=$_POST['user'];
$password=$_POST['pass'];
$cmd=`sudo useradd $name`;
$cmd1= `echo $password | sudo passwd --stdin $name`;
echo $name.' user added with password as '.$password;
echo '<br><a href="task7.php">BACK</a>';

?>