<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	$action = $_POST['zone-sub'];
	
	if($action=="master-create")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Create Master Zone</li>
		</ol>';
		
		$dname = $_POST['name'];
		$email = $_POST['email'];		
		$cmd=`sudo cat /var/named/chroot/etc/named.conf | grep $dname`;
		
		if($cmd!="")
		{	
			echo '<label class="alert alert-danger">Domain Already Exists<label>';
		}
		
		else
		{
			$cmd1=`sudo touch dns.sh`;
			$cmd2=`sudo chmod 777 dns.sh`;
$cmd3=`echo "echo '\nzone \"$dname\" {
        type master;
        file \"/var/named/$dname.hosts\"; 
};
       ' >> /var/named/chroot/etc/named.conf">dns.sh`;
$cmd4=`sudo bash dns.sh`;
$cmd5=`sudo rm -rf dns.sh`;
$cmd6=`sudo touch /var/named/chroot/var/named/$dname.hosts`;
$cmd7=`sudo touch 777 /var/named/chroot/var/named/$dname.hosts`;
$cmd8=`sudo touch hosts.sh`;
$cmd9=`sudo chmod 777 hosts.sh`;

   
$cmd10=`echo "echo '\$"ttl" 38400
$dname.     IN    SOA     server1. $email. (
                 1383918149          
                 10800
                 3600
                 604800
                 38400 )' > /var/named/chroot/var/named/$dname.hosts" > hosts.sh`;

$cmd11=`sudo bash hosts.sh`;
$cmd12=`sudo rm -rf hosts.sh`;
$cmd13=`sudo chmod 644 /var/named/chroot/var/named/$dname.hosts`;
			echo '<label class="alert alert-success">Zone <b>'.$dname.'</b> has been successfully created.</label>';



		}
		
	}
	
	if($action=="master-del")
	{
		$dname = $_POST['name'];
		$cmd = `sudo cat /var/named/chroot/etc/named.conf | grep $dname`;
		
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Delete Master Zone</li>
		</ol>';
		
		
		if($cmd)
		{
			
		$cmd1=`sudo grep -w "$dname" -n /var/named/chroot/etc/named.conf`;
		$cmd2=explode(":",$cmd1);
		$start_line=$cmd2[0];
		$end_line=$start_line+3;
		$cmd3=`sudo sed -i '{$start_line},{$end_line}d' /var/named/chroot/etc/named.conf`;
		$cmd4=`sudo sed -i '{$start_line},{$end_line}d' /etc/named.conf`;
		$cmd5=`sudo rm -rf /var/named/chroot/var/named/$dname.hosts`;
		$cmd6=`sudo /etc/init.d/named restart`;
		$cmd7=`sudo service named restart`;
		 
		echo '<label class="alert alert-success">Domain '.$dname.' successfully deleted.';
		}
		else
		{
		echo '<label class="alert alert-danger">Master Zone '.$dname.' does not exist!<label>';
		}
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
		
		$ip=$_POST['ip'];
		$dname=$_POST['name'];
		$cmd=`sudo cat /var/named/chroot/var/named/$dname.hosts`;

		$valid_ip;
		$x = explode(".",$ip);
		
		if(($x[0]>=1 && $x[0]<=255) && ($x[1]>=0 && $x[1]<=255) && ($x[2]>=0 && $x[2]<=255) && ($x[3]>=0 && $x[3]<=255) && $x[4]=="")
		{
			$valid_ip = "true";
			
		}
		else
		{
			$valid_ip = "false";
			
		}
		
		if($cmd)
		{
			echo '<label class="alert alert-danger">Domain name '.$dname.' already exist!!';
		}
		else
		{
			if($valid_ip=="true")
			{
				$cmd1=`sudo touch slave.sh`;
				$cmd2=`sudo chmod 777 slave.sh`;
				$cmd3=`echo "echo 'zone \"$dname\" {
                       type slave;
        	       masters {
$ip;
  };
        file \"/var/named/slaves/$dname.hosts\"; };
       ' >> /var/named/chroot/etc/named.conf">slave.sh`;
			$cmd4=`sudo bash slave.sh`;
			$cmd5=`sudo rm -rf slave.sh`;
			}
		}
		
		
		
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
		
		$dname=$_POST['name'];
		$cmd=`sudo cat /var/named/chroot/var/named/$dname.hosts`;
		$cmd1=`sudo cat /var/named/chroot/etc/named.conf | grep $dname`;
		if($cmd)
		{
			echo '<label class="alert alert-danger">Domain name '.$dname.'is not a slave zone!!</label>';			
		}
		
		else if($cmd1)
		{
		  	$l=`sudo grep -w "$a" -n /var/named/chroot/etc/named.conf`;
			$q=explode(":",$l);
			$r=$q[0];
			$p=$r+6;
			$u=`sudo sed -i '{$r},{$p}d' /named.conf`;
			$u=`sudo sed -i '{$r},{$p}d' /var/named/chroot/etc/named.conf`;
			echo '<label class="alert alert-success">Slave Zone successfully created!!</label>';			
		}

		
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
		
		$ip=$_POST['servers'];
		$dname=$_POST['name'];
		$cmd=`sudo cat /var/named/chroot/var/named/$dname.hosts`;
		$valid_ip;
		$x = explode(".",$ip);
		
		if(($x[0]>=1 && $x[0]<=255) && ($x[1]>=0 && $x[1]<=255) && ($x[2]>=0 && $x[2]<=255) && ($x[3]>=0 && $x[3]<=255) && $x[4]=="")
		{
			$valid_ip = "true";
			
		}
		else
		{
			$valid_ip = "false";
			
		}
		
		if($cmd)//already exist
		{
			echo '<label class="alert alert-danger">Domain name '.$dname.' already exists!!</label>';			

		}
		else
		{
			if($valid_ip=="true")
			{
				$cmd=`sudo touch forward.sh`;
				$cmd2=`sudo chmod 777 forward.sh`;
				$cmd3=`echo "echo 'zone \"$dname\" {
                 type forward;
        	  forwarders {
                    $ip;
                      };
  }; ' >> /var/named/chroot/etc/named.conf">forward.sh`;
  				$cmd4=`sudo bash forward.sh`;
				$cmd5=`sudo rm -rf forward.sh`;
				echo '<label class="alert alert-success">Forwaed Zone successfully created!!</label>';			
			}
			else
			{
			echo '<label class="alert alert-danger">Enter a valid Server Address!!</label>';			
			}
			
		}
		
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
		
		$dname=$_POST['name'];
		$cmd=`sudo cat /var/named/chroot/var/named/$dname.hosts`;
		
		if($cmd)
		{
			echo '<label class="alert alert-danger">Domain name '.$dname.'is not a forward zone!!</label>';			
		}
		else
		{
			$l=`sudo grep -w "$a" -n /named.conf`;
			$q=explode(":",$l);
			$r=$q[0];
			$p=$q[0]+5;
			$u=`sudo sed -i '{$r},{$p}d' /var/named/chroot/etc/named.conf`;
			$u=`sudo sed -i '{$r},{$p}d' /etc/named.conf`;
				echo '<label class="alert alert-success">Forwaed Zone successfully deleted!!</label>';			
		}

	}
	
	if($action=="add-a")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
			<li class="active">Add Address Record</li>
		</ol>';
		
		
		$dname = $_POST['name'];
		$ip = $_POST['ip'];
		$address = $_POST['add'];
		$cmd=`sudo cat /var/named/chroot/etc/named.conf | grep $dname`;
		
		$valid_ip;
		$x = explode(".",$ip);
		
		if(($x[0]>=1 && $x[0]<=255) && ($x[1]>=0 && $x[1]<=255) && ($x[2]>=0 && $x[2]<=255) && ($x[3]>=0 && $x[3]<=255) && $x[4]=="")
		{
			$valid_ip = "true";
			
		}
		else
		{
			$valid_ip = "false";
			
		}
		
		if($cmd!="")
		{
			if($valid_ip=="true")//valid ip
			{
				if($address=="")//blank A record
				{
					$cmd2=`sudo touch address.sh`;
          			$cmd3=`sudo chmod 777 address.sh`;
					$cmd4=`echo "echo '$dname.    IN    A     $ip ' >> /var/named/chroot/var/named/$dname.hosts">address.sh`;			
          			$cmd5=`sudo bash address.sh`;
          			$cmd6=`sudo rm -rf address.sh`;
					$res = `sudo service named restart`;
          			echo '<label class="alert alert-success">Blank \"A\" record for '.$dname.' has been registered.</label>';

				}
				else
				{
					$cmd6=`sudo touch address.sh`;
          			$cmd7=`sudo chmod 777 address.sh`;
          			$cmd8=`echo "echo '$address.$dname. IN   A     $ip ' >> /var/named/chroot/var/named/$dname.hosts">address.sh`;
          			$cmd9=`sudo bash address.sh`;
          			$cmd10=`sudo rm -rf address.sh`;
          			echo '<label class="alert alert-success">'.$address.' \"A\" record for '.$dname.' has been registered.</label>';
				}
			}
			else
			{
				echo '<label class="alert alert-danger">Enter a valid IP address!!';
			}	
		}
		
		else
		{
			echo '<label class="alert alert-danger">Domain name '.$dname.' does not exist!!';
		}
	}
	
	if($action=="add-ns")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Bind NameServer Record</li>
		</ol>';
		
		$dname = $_POST['name'];
		$nameserver = $_POST['nameserver'];		
		$cmd = `sudo cat /var/named/chroot/etc/named.conf | grep $dname`;
		
		if($cmd)
		{
			$cmd1=`sudo touch ns.sh`;
            $cmd2=`sudo chmod 777 ns.sh`;
   			$cmd3=`echo "echo '$dname. IN    NS      $nameserver ' >> /var/named/chroot/var/named/$dname.hosts">ns.sh`;
            $cmd4=`sudo bash ns.sh`;
            $cmd5=`sudo rm -rf ns.sh`;
			echo '<label class="alert alert-success">Name Server '.$nameserver.' has been registered for '.$dname.'</label>';
		}
		
		else
		{
			echo '<label class="alert alert-danger">Domain name '.$dname.' does not exist!!</label>';
		}
	}
	
	if($action=="add-mx")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="dns.php">Setup Dns</a></li>
 			<li class="active">Bind MailServer Record</li>
		</ol>';
		
		$dname = $_POST['name'];
		$mailserver = $_POST['mailserver'];	
		$priority = $_POST['priority'];	
		$cmd = `sudo cat /var/named/chroot/etc/named.conf | grep $dname`;
		
		if($cmd)
		{
						
					    $h=`sudo touch mailserver.sh`;
					    $h=`sudo chmod 777 mailserver.sh`;
					    $h=`echo "echo '$dname.  IN  MX  $priority   $mailserver' >> /var/named/chroot/var/named/$dname.hosts" > mailserver.sh `;
					    $h=`sudo bash mailserver.sh`;
					    $h=`sudo rm -rf mailserver.sh`;	
						echo '<label class="alert alert-success">Mail Server '.$nameserver.' has been registered for '.$dname.'</label>';
		}
		else
		{
			echo '<label class="alert alert-danger">Domain name '.$dname.' does not exist!!</label>';

		}
	}
}
else
header("location:index.php");