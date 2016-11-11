<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{echo'
 
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">Logs</li>
</ol>

<ul class="nav nav-tabs nav-justified">
  <li class="active"><a href="passwd.php">Users</a></li>
  <li><a href="groups.php">Groups</a></li>
 </ul>';
 
$txt = `sudo cat /etc/passwd`;
$data = '<pre>'.$txt.'<pre>';
//echo $data;
$x = explode("\n",$data);
$count =  count($x);
echo '<br><br>';
echo '<table class="table table-hover">
  <tr>
    <td>#</td>
    <td>UName</td>
    <td>pass</td>
    <td>uid</td>
    <td>gid</td>
    <td>gecos</td>
    <td>home</td>
    <td>shell</td>
  </tr>';
list($uname, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
for($i=0;$i<$count-1;$i++)
{
  list($uname, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $x[$i]);
  echo '
  <tr>
  	<td>'.($i+1).'</td>
	<td>'.$uname.'</td>
	<td>'.$pass.'</td>
	<td>'.$uid.'</td>
	<td>'.$gid.'</td>
	<td>'.$gecos.'</td>
	<td>'.$home.'</td>
	<td>'.$shell.'</td>
 </tr>';
}
echo '</table>';}
else
header("location:index.php");
?>