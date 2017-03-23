<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	$action=$_POST['firewall'];
	
	if($action=="stop")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li><a href="firewall.php">Firewalls</a></li>
 			<li class="active">Stop Firewall Service</li>
		</ol>';
		
		$cmd=`sudo service iptables stop`;
		echo '<label class="alert alert-success">Iptables Service Stopped!!</label>';
			
	}
	
	if($action=="start")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li><a href="firewall.php">Firewalls</a></li>
 			<li class="active">Start Firewall Service</li>
		</ol>';
		
		$cmd=`sudo service iptables start`;
		echo '<label class="alert alert-success">Iptables Service Started!!</label>';

	}
	
	if($action=="restart")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li><a href="firewall.php">Firewalls</a></li>
 			<li class="active">Restart Firewall Service</li>
		</ol>';
		
		$cmd=`sudo service iptables restart`;
		echo '<label class="alert alert-success">Iptables Service Restart!!</label>';
	}
	
	if($action=="flush")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li><a href="firewall.php">Firewalls</a></li>
 			<li class="active">Flush Firewall</li>
		</ol>';
		
		$cmd=`sudo iptables -F`;
		echo '<label class="alert alert-success">All rules and all chains Deleted(Flushed)!!</label>';
	}
	
	if($action=="save")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li><a href="firewall.php">Firewalls</a></li>
 			<li class="active">Save Iptables</li>
		</ol>';
		
		$cmd=`sudo service iptables save`;
		echo '<label class="alert alert-success">Current Configeration for Iptables is saved!!</label>';
	}
	
	if($action=="list")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li><a href="firewall.php">Firewalls</a></li>
 			<li class="active">Flush Firewall</li>
		</ol>';
		
		$cmd=`sudo iptables -L`;
		echo '<label class="alert alert-primary"><pre>'.$cmd.'</pre></label>';
	}
	
	if($action=="status")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li><a href="firewall.php">Firewalls</a></li>
 			<li class="active">Flush Firewall</li>
		</ol>';
		
		$cmd=`sudo service iptables status`;
		echo '<label class="alert alert-primary"><pre>'.$cmd.'</pre></label>';
	}
	
	if($action=="set")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="system.php">Systems</a></li>
 			<li><a href="firewall.php">Firewalls</a></li>
 			<li class="active">Configure Firewall</li>
		</ol>';
		$service=$_POST['service'];
		$traffic=$_POST['traffic'];
		$mode=$_POST['mode'];
		$port=$_POST['port'];
		$ip=$_POST['ip'];
		$valid_ip;
		$x = explode(".",$ip);
		$x = explode(".",$ip);
		
		if(($x[0]>=1 && $x[0]<=255) && ($x[1]>=0 && $x[1]<=255) && ($x[2]>=0 && $x[2]<=255) && ($x[3]>=0 && $x[3]<=255) && $x[4]=="")
		{
			$valid_ip = "true";
			
		}
		else
		{
			$valid_ip = "false";
			
		}
		
		if($valid_ip=="true")
		{
			if($service == "icmp" && $port=="")
			{
				$cmd=`sudo iptables -A $traffic -s $ip -p icmp --icmp-type -request -j $mode`;
				echo '<label class="alert alert-success">Firewall for ICMP has been Setup.</label>';
			}
			else
			{
				$cmd=`sudo iptables -A $traffic -s $ip -p tcp --dport $port -j $mode`;
				echo '<label class="alert alert-success">Firewall for TCP has been Setup.</label>';

			}
		}
		
		else
			echo '<label class="alert alert-danger">Wrong IP/Mask Entered. Enter in CIDR Format.</label>';

		
	}
	
	
	
}
else
header("location:index.php");

