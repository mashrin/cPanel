<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	$action = $_POST['apache1-sub'];
	
	if($action=="create")
	{
		echo '
		<ol class="breadcrumb">
  			<li><a href="home.php">Home</a></li>
  			<li><a href="server.php">Servers</a></li>
			<li><a href="apache.php">Setup Apache</a></li>
			<li class="active">Add Virtual Server</li>
		</ol>';
		
		$dname = $_POST['dname'];
		$ip = $_POST['ip'];
		$doc_root = $_POST['doc-root'];
		
		$cmd = `sudo cat /etc/httpd/conf/httpd.conf | grep $dname` ;
		$valid_path = `sudo find $doc_root`;
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
		
		if($cmd=="")//server doesnot exist
		{
			if($valid_ip=="true")//valid ip
			{
				if($valid_path)//valid path
				{
					$cmd1=`sudo touch apache.sh`;
					$cmd2=`sudo chmod 777 apache.sh`;
					$cmd3=`echo "echo '<VirtualHost $ip>
					DocumentRoot \"$doc_root\"
					ServerName $dname
					<Directory \"$doc_root\">
					allow from all
					Options +Indexes
					</Directory>
					</VirtualHost>' >> /etc/httpd/conf/httpd.conf">apache.sh`;
					$cmd4=`sudo bash apache.sh`;
					$cmd5=`sudo rm -rf apache.sh`;
					$cmd6=`sudo /etc/init.d/httpd start`;
					$res = `sudo service httpd restart`;
					echo '<label class="alert alert-success">Web hosting done successfully!!</label>';

				}
				
				else
				{
					echo '<label class="alert alert-danger">Invalid Document Root!!</label>';

				}
			}
			else
			{
			echo '<label class="alert alert-danger">Invalid IP address!!</label>';
			}
		}
		
		else
		{
			echo '<label class="alert alert-danger">Domain name'.$dname.' does not exist!!</label>';
		}

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
		
		$dname = $_POST['dname'];
		$cmd = `sudo cat /etc/httpd/conf/httpd.conf | grep $dname` ;
		
		if($cmd)
		{
			$data=`sudo grep -w "$dname" -n /etc/httpd/conf/httpd.conf`;
			$x=explode(":",$data);
			$st=$x[0];
			$start=$st-2;
			$end=$x[0]+5;
			$cmd1=`sudo sed -i '{$start},{$end}d' /etc/httpd/conf/httpd.conf`;
			echo '<label class="alert alert-success">Domain name'.$dname.' deleted!!</label>';
			$res = `sudo service httpd restart`;


		}
		
		else
		{
			echo '<label class="alert alert-danger">Domain name'.$dname.' does not exist!!</label>';

		}
	}
}
else
header("location:index.php");