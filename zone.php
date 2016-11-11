<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	
	$action = $_POST["sub-dns"];
	
	if($action=="master-create")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Create Master Zone</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Create Master Zone</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Domaine Name"  required autofocus>
      <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="master-create">Create Zone</button> 	
	  </div>
      </form>
	</div>';
		
		
	}
	
	
	if($action=="master-del")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Delete Master Zone</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Delete Master Zone</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Domaine Name"  required autofocus>
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="master-del">Delete Zone</button> 	
	  </div>
      </form>
	</div>';
	}
	
	if($action=="slave-create")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Create Slave Zone</li>
		</ol>';
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Create Slave Zone</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Domaine Name"  required autofocus><br>
      <input type="text"  name="ip" class="form-control " placeholder="Enter Server IP" required>

      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="slave-create">Create</button> 	
	  </div>
      </form>
	</div>';
	}
	
	if($action=="slave-del")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Delete Slave Zone</li>
		</ol>';
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Delete Slave Zone</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Slave Domain"  required autofocus><br>

      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="slave-del">Delete</button> 	
	  </div>
      </form>
	</div>';
	}
	
	if($action=="forward-create")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Create Forward Zone</li>
		</ol>';
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Create Forward Zone</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Domain Name / Network"  required autofocus><br>
      <input type="text"  name="servers" class="form-control " placeholder="Enter Master Servers"  required autofocus><br>


      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="forward-create">Create</button> 	
	  </div>
      </form>
	</div>';
	}

if($action=="forward-del")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Delete Forward Zone</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Delete Forward Zone</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Forward Domain"  required autofocus><br>

      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="forward-del">Delete</button> 	
	  </div>
      </form>
	</div>';
	}
	
	if($action=="add-mx")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Bind Mail Server Record</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Add MailServer Record</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Domaine Name"  required autofocus><br>
      <input type="text"  name="mailserver" class="form-control " placeholder="Enter Mail Server  (Fully Qualified Domain Name eg: mail.domain.com.)" required><br>
      <input type="number"  name="priority" class="form-control " placeholder="Enter Priority should be between 0-9"  required autofocus>
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="add-mx">Bind NameServer Record</button> 	
	  </div>
      </form>
	</div>';
	}
	
	if($action=="add-ns")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Bind NameServer Reocrd</li>
		</ol>';
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Add NameServer Record</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Domaine Name"  required autofocus><br>
      <input type="text"  name="nameserver" class="form-control " placeholder="Enter Name Server  (Fully Qualified Domain Name eg: ns.domain.com.)" required>

      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="add-ns">Bind NameServer Record</button> 	
	  </div>
      </form>
	</div>';
	}
	
	if($action=="add-a")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Bind an Address Record</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="zone1.php" method="post">
      <h2 class="form-signin-heading">Add Address Reocrd</h2>
      <input type="text"  name="name" class="form-control " placeholder="Enter Domaine Name"  required autofocus><br>
      <input type="text" name="ip" class="form-control" placeholder="Enter Server IP adress" required><br>
      <input type="text"  name="add" class="form-control " placeholder="Enter Address (dns,sales or blank)">

      <div>
	  	<br>
	  	<button class="btn btn-primary" name="zone-sub" value="add-a">Bind Address Record</button> 	
	  </div>
      </form>
	</div>';
		
		
	}
	
	
}
else
header("location:index.php");