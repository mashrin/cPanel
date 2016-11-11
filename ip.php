<?php
include 'header.php';
if(isset($_POST['sub']))
{
	$ip=` sudo ifconfig | grep 'inet addr:'`;
	$who=`sudo who`;
}
?>

<center>
<div class="container">
<div class="jumbotron">
  <form action="ip.php" method="post">
  <p><button class="btn btn-primary btn-lg" role="button" name="sub" value="ip">Know your IP!</button>
  <button class="btn btn-primary btn-lg" role="button" name="sub" value="who">Check WHO!!</button></p></form>
  <?php 
  $sub=$_POST['sub'];
  if($sub=="ip"){
		echo '<label class="alert alert-primary"><pre>'.$ip.'</pre></label>';
  }
  if($sub=="who")
  {
		echo '<label class="alert alert-primary"><pre>'.$who.'</pre></label>';
  }
 ?>
 </div>
</div>
</center>
</body>
</html>
	