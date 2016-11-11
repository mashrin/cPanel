<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	
	$type=$_POST['netconfig'];
	
		
	if($type == "static")
	{
		
		$type = $_POST['netconfig'];
		$ip = $_POST['ip'];
		$mask = $_POST['mask'];
		$gateway = $_POST['gateway'];
		
		$valid_ip;
		$valid_gate;
		$y = explode(".",$gateway);
		$x = explode(".",$ip);
		
		
		if(($x[0]>=1 && $x[0]<=255) && ($x[1]>=0 && $x[1]<=255) && ($x[2]>=0 && $x[2]<=255) && ($x[3]>=0 && $x[3]<=255) && $x[4]=="")
		{
			$valid_ip = "true";
			
		}
		else
		{
			$valid_ip = "false";
			
		}
		
		if(($y[0]>=1 && $y[0]<=255) && ($y[1]>=0 && $y[1]<=255) && ($y[2]>=0 && $y[2]<=255) && ($y[3]>=0 && $y[3]<=255) && $y[4]=="")
		{
			$valid_gate = "true";
			
		}
		else
		{
			$valid_gate = "false";
			
		}
		
		
			
		if($valid_ip=="true" && $valid_gate=="true")
		{
			$cmd = `sudo echo "
			DEVICE=eth0
			ONBOOT=yes
			BOOTPROTO=static
			IPADDR=$ip
			NETMASK=$mask
			GATEWAY=$gateway"  > /etc/sysconfig/network-scripts/ifcfg-eth0`;
		
			echo '<label class="alert alert-success">IP has been set.</label>'; 
		}
			
		else
		{
			echo '<label class="alert alert-danger">Invalid IP Address OR Gateway Address.</label>'; 
		}
				
		
		
		

	}
}
else
header("location:index.php");

