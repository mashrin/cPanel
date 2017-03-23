<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	$action=$_POST['netconfig'];
	
	if($action=="static")
	{
		echo '
	<div class="container">
		 
      <form action="netconfig1.php" method="post">
        <h4 class="form-signin-heading">Enter Details</h4>
		<br>
        <input type="text"  name="ip" class="form-control " placeholder="IP" required><br>
        <input type="text" name="mask" class="form-control" placeholder="Subnet Mask" required><br>
		<input type="text" name="gateway" class="form-control" placeholder="Gateway"><br>
		
        <br>
        <div>
	  	<button class="btn btn-primary" name="netconfig" value="static">Submit</button>
		</div>
			
     
    </div>
	</form>';
	}
	
	if($action=="dynamic")
	{
		$cmd = `sudo echo "DEVICE=eth0" > /etc/sysconfig/network-scripts/ifcfg-eth0`;
		$cmd = `sudo echo "ONBOOT=yes" >> /etc/sysconfig/network-scripts/ifcfg-eth0`;
		$cmd = `sudo echo "BOOTPROTO=dhcp" >> /etc/sysconfig/network-scripts/ifcfg-eth0`;
		echo '<label class="alert alert-success">IP has been set to dynamic mode</alert>'; 
	}
	
	
}
else
header("location:index.php");

