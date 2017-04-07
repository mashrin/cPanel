<?php
	
$pass = 'nettech';
$salt = '$1$yjm2nDqy';
   $abc = crypt($pass,$salt);
	echo $abc;


?>