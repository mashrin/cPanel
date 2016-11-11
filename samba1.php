<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	$action=$_POST['samba1'];
	if($action=="convert")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="samba.php">Setup Samba</a></li>
 			<li class="active">Convert User</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="samba2.php" method="post">
      <h2 class="form-signin-heading">Convert Unix User to Samba User</h2>
      <input type="text" name="name" class="form-control" placeholder="Enter Name of the User to Convert" required>
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="samba2" value="convert">Convert</button> 	
	  </div>
      </form>';
	}
	
	if($action=="create")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="samba.php">Setup Samba</a></li>
 			<li class="active">Create New Share</li>
		</ol>';
		
		echo '
	<div class="container">
      <form  action="samba2.php" method="post">
      <h2 class="form-signin-heading">Create New Share</h2>
      <input type="text" name="name" class="form-control" placeholder="Share Name" required>
      <input type="text" name="dir" class="form-control" placeholder="Directory Name to be Shared" required>
      <input type="text" name="writable" class="form-control" placeholder="Writable(Specify in yes/no)" required>
      <input type="text" name="printable" class="form-control" placeholder="Printable(Specify in yes/no)" required>
      <input type="text" name="path" class="form-control" placeholder="Enter Path" required>
      <input type="text" name="owner" class="form-control" placeholder="Enter Owner of the Shared File">
      <input type="text" name="gowner" class="form-control" placeholder="Enter Group Owner of the Shared FIle">
      <input type="text" name="vusers" class="form-control" placeholder="Enter Valid Users(seperated by comma(,))">
      <input type="text" name="iusers" class="form-control" placeholder="Enter Invalid Users (seperated by comma(,))">
      <input type="text" name="vgroups" class="form-control" placeholder="Enter Valid Groups" >
      <input type="text" name="igroups" class="form-control" placeholder="Enter Invalid Groups" >
      <input type="text" name="comment" class="form-control" placeholder="Enter Comment required">

      <div>
	  	<br>
	  	<button class="btn btn-primary" name="samba2" value="create">Create</button> 	
	  </div>
      </form>';
		
	}
	
	if($action=="undo")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="samba.php">Setup Samba</a></li>
 			<li class="active">Undo Samba Share</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="samba2.php" method="post">
      <h2 class="form-signin-heading">Undo Samba Share</h2>
      <input type="text" name="name" class="form-control" placeholder="Enter Share Name" required><br>
      <input type="text" name="path" class="form-control" placeholder="Enter Share Path" required>
	  
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="samba2" value="undo">Undo</button> 	
	  </div>
      </form>';
	}
	
	if($action=="change")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="samba.php">Setup Samba</a></li>
 			<li class="active">Change Password</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="samba2.php" method="post">
      <h2 class="form-signin-heading">Change Password</h2>
      <input type="text" name="name" class="form-control" placeholder="Enter Share Name required><br>
      <input type="password" name="pass" class="form-control" placeholder="Enter New Password" required>
	  
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="samba2" value="change">Change</button> 	
	  </div>
      </form>';
		
	}
}
else
header("location:index.php");