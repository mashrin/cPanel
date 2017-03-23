<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	$action = $_POST['function'];
	
	if($action=="conf")
	{
		if(TRUE){
		
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li class="active">Configure Firewall Services</li>
		</ol>';
		
		echo '
	<div class="container">
      <form class="form-signin" role="form" action="fire1.php" method="post">
      <h3 class="form-signin-heading"><u>Configure Firewall</h3></u><br>
	  
		<label>Select the Service On Which You Want To Configure Firewall: </label>
		<select name="service">
		<option>TCP</option>
		<option>ICMP</option>
		</select><br><br>
		
		<label>Select The Type OF Traffic You Want To Control:</label>
		<select name="traffic">
		<option>INPUT</option>
		<option>OUTPUT</option>
		</select><br><br>
		
		<label><label>Select Whether to ACCEPT,DROP or REJECT the Traffic:</label>
		<select name="mode">
		<option>ACCEPT</option>
		<option>REJECT</option>
		<option>DROP</option><br><br>
		</select><br><br>
		
	    <input type="text" name="port" class="form-control" placeholder="Enter port number or Service Name" required><br>
	    <input type="text" name="ip" class="form-control" placeholder="Enter IP Address" required>
				
      <div>
	  	<br>
	  	<button class="btn btn-primary" name="firewall" value="set">Set Firewall</button> 	
	  </div>
      </form>';}break;
	}
	$action="services";
	if($action=="services")
	{
		
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li class="active">Firewall Services</li>
		</ol>';
		echo '
		
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/fw.png" alt="1/0">
      <div class="caption">
        <h3>Enable/Disable Firewall</h3>
        <p>Use to Start/Restart/Stop the firewall services.</p>
        <form action="fire1.php" method="post">
        <p><button class=" btn btn-primary" name="firewall" value="start" >Start</button>
		<button class="btn btn-primary" name="firewall" value="restart" >Restart</button>
		<button class="btn btn-primary" name="firewall" value="stop" >Stop</button></p>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/fw.png" alt="1/0">
      <div class="caption">
        <h3>Flush/Save Firewall</h3>
        <p>Use to Flush/Save the firewall Configeration.</p>
        <form action="fire1.php" method="post">
        <p><button class=" btn btn-primary" name="firewall" value="save" >Save Configeration</button>
		<button class="btn btn-primary" name="firewall" value="flush" >Flush</button></p>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/fw.png" alt="1/0">
      <div class="caption">
        <h3>Check Status/Rules</h3>
        <p>Check the status of the firewall services and view the rules.</p>
        <form action="fire1.php" method="post">
        <p><button class=" btn btn-primary" name="firewall" value="status" >Check Status</button>
        <button class=" btn btn-primary" name="firewall" value="list" >List Rules</button></p>
        </form>
      </div>
    </div>
  </div>
  
</div>';
	}
}
else
header("location:index.php");