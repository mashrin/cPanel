<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	echo'
	<ol class="breadcrumb">
  <li><a href="home.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">Logs</li>
</ol>
<ul class="nav nav-tabs">
  <li><a href="logsmessages.php">log/messages</a></li>
  
  <li><a href="logshttpd.php">log/httpd</a></li>
  <li><a href="bootlog.php">log/boot.log</a></li>
  <li  class="active"><a href="logsmail.php">log/maillog</a></li>
</ul>
';
$data = `sudo cat /var/log/maillog`;
	if($data != "")
	{
		echo '<label class="alert alert-primary"><pre>'.$data.'</pre></label>';
	}
	else
		echo '<label class="alert alert-primary"><pre>Mail Log Empty</pre></label>';

}
else
header("location:index.php");
?>