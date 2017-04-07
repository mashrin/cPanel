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
  <li><a href="index1.php">Home</a></li>
  <li class="active"><a href="system.php">System</a></li>
  <li><a href="server.php">Servers</a></li>
   <li><a href="networking.php">Networking</a></li>
    <li><a href="other.php">Other</a></li>
</ul>
<hr />
</center> 
<ol class="breadcrumb col-xs-offset-1">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">Logs</li>
</ol> <br>

<ul class="nav nav-tabs nav-justified">
  <li class="active"><a href="logsmessages.php">log/messages</a></li>
  <li><a href="logshttpd.php">log/httpd</a></li>
  <li><a href="logsauth.php">log/auth.log</a></li>
  <li><a href="logsmail.php">log/maillog</a></li>
</ul>
<?php
$data = `sudo cat /var/log/messages`;
echo '<pre>'.$data.'</pre>';
?>