<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	$action=$_POST['apache-option'];
	
	if($action=="create")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="apache.php">Setup Apache</a></li>
 			<li class="active">Create New Virtual Server</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="apache2.php" method="post">
      <h2 class="form-signin-heading">Create New Virtual Server</h2>
      <input type="text"  name="ip" class="form-control " placeholder="Enter Server IP Address"  required autofocus><br>
      <input type="text"  name="doc-root" class="form-control " placeholder="Enter Document Root"  required autofocus><br>
      <input type="text" name="dname" class="form-control" placeholder="Enter Doamin Name" required>
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="apache1-sub" value="create">Create Server</button> 	
	  </div>
      </form>
	</div>';
	}
	
	if($action=="delete")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="apache.php">Setup Apache</a></li>
 			<li class="active">Delete Virtual Server</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="apache2.php" method="post">
      <h2 class="form-signin-heading">Delete Virtual Server</h2>
      <input type="text" name="dname" class="form-control" placeholder="Enter Doamin Name" required>
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="apache1-sub" value="delete">Delete Server</button> 	
	  </div>
      </form>
	</div>';
	}
}
else
header("location:index.php");