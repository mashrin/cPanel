<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{echo'

 
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">Logs</li>
</ol> <br>

<ul class="nav nav-tabs nav-justified">
  <li><a href="passwd.php">Users</a></li>
  <li class="active"><a href="groups.php">Groups</a></li>
 </ul>';
 
$txt = `sudo cat /etc/group`;
$data = '<pre>'.$txt.'<pre>';
//echo $data;
$x = explode("\n",$data);
$count =  count($x);
echo '<br><br>';
echo '<table class="table table-hover">
  <tr>
    <td>#</td>
    <td>GroupName</td>
    <td>Pass</td>
    <td>Gid</td>
    <td>GroupList</td>
    
  </tr>';
list($gname, $pass, $gid, $glist) = explode(":", $data);
for($i=0;$i<$count-1;$i++)
{
  list($gname, $pass, $gid, $glist) = explode(":", $x[$i]);
  echo '
  <tr>
  	<td>'.($i+1).'</td>
	<td>'.$gname.'</td>
	<td>'.$pass.'</td>
	<td>'.$gid.'</td>
	<td>'.$glist.'</td>
	
 </tr>';
}
echo '</table>';}
else
header("location:index.php");
?>