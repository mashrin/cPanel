<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	$action=$_POST['samba2'];
	
	if($action=="convert")
	{
		$name=$_POST['name'];
		$cmd = `cat /etc/passwd | grep $name`;
		
		if($cmd)
		{
			$cmd1=`sudo smbpasswd -a $name`;
			echo $cmd1;
			echo '<label class="alert alert-success">User '.$name.' has been converted!!</label>';
			$res = `sudo service smb restart`;
		}
		else
			echo '<label class="alert alert-danger">User '.$name.' does not exist!!</label>';
	}
	
	if($action=="create")
	{
		$name=$_POST['name'];
		$dir=$_POST['dir'];
		$writable=strtolower($_POST['writable']);
		$printable=strtolower($_POST['printable']);
		$path=$_POST['path'];
		$owner=$_POST['owner'];
		$gowner=$_POST['gowner'];
		$vusers=$_POST['vusers'];
		$iusers=$_POST['iusers'];
		$vgroups=$_POST['vgroups'];
		$igroups=$_POST['igroups'];
		$comment=$_POST['comment'];
		
		$cmd = `sudo cat /etc/samba/smb.conf | grep -w $name`;
		$path_check = `sudo find $path/$dname`;
		
		if($cmd)//share name does not exist
		{
			if($path_check)//valid path
			{
				if($writable=="yes" && $printable=="yes")
				{
				$cmd1=`sudo touch samba.sh`;
				$cmd2=`sudo chmod 777 samba.sh`;
				$cnd3= `echo 'echo "[$dir]
				comment = $comment
       	 		guest account = $dir
        		writeable = yes
				printable = yes
        		path = $path/$dir;
        		force user = $owner,@$gowner
        		valid users = $vusers,@$vgroups
        		invalid users = $iusers,@$igroups" >> /etc/samba/smb.conf' > samba.sh`;
				$cmd4=`sudo bash samba.sh`;
				$cmd5=`sudo rm -rf samba.sh`;
				$cmd6=`sudo service smb restart`;
				}
			
			if($writable=="no" && $printable=="yes")
				{
				$cmd1=`sudo touch samba.sh`;
				$cmd2=`sudo chmod 777 samba.sh`;
				$cnd3= `echo 'echo "[$dir]
				comment = $comment
       	 		guest account = $dir
        		writeable = no
				printable = yes
        		path = $path/$dir;
        		force user = $owner,@$gowner
        		valid users = $vusers,@$vgroups
        		invalid users = $iusers,@$igroups" >> /etc/samba/smb.conf' > samba.sh`;
				$cmd4=`sudo bash samba.sh`;
				$cmd5=`sudo rm -rf samba.sh`;
				$res=`sudo service smb restart`;
				}
			
			if($writable=="yes" && $printable=="no")
				{
				$cmd1=`sudo touch samba.sh`;
				$cmd2=`sudo chmod 777 samba.sh`;
				$cnd3= `echo 'echo "[$dir]
				comment = $comment
       	 		guest account = $dir
        		writeable = yes
				printable = no
        		path = $path/$dir;
        		force user = $owner,@$gowner
        		valid users = $vusers,@$vgroups
        		invalid users = $iusers,@$igroups" >> /etc/samba/smb.conf' > samba.sh`;
				$cmd4=`sudo bash samba.sh`;
				$cmd5=`sudo rm -rf samba.sh`;
				$res=`sudo service smb restart`;
				}
			}
			
			echo '<label class="alert alert-danger">Invalid Path!!</label>';
				
						
		}
		else
		{
			echo '<label class="alert alert-danger">Share name already exist!!</label>';
		}
		
	}
	
	if($action=="undo")
	{
		$name=$_POST['name'];
		$path=$_POST['path'];
		
		if(fopen("$path", "r") == TRUE)
		{
			$cmd1=`sudo grep -w "$a" -n /etc/samba/smb.conf`;
			$cmd2=`sudo grep -w "$b" -n /etc/samba/smb.conf`;
			$cmd3=explode(":",$cmd1);
			$cmd4=explode(":",$cmd2);
			$start=$cmd3[0];
			$end=$cmd4[0];
			$cmd5=`sudo sed -i '{$start},{$end}d' /etc/samba/smb.conf`;
			$cmd6=`sudo /etc/init.d/smb restart`;
			$res=`sudo service smb restart`;
		}
		else
			echo '<label class="alert alert-danger">Invalid Directory!!</label>';
		
	}
	
	if($action=="change")
	{
		$pass=$_POST['pass'];		
		$name=$_POST['name'];
		$cmd=`cat /etc/passwd | grep $name`;
		if($cmd)
		{
			$cmd1=`echo $pass | sudo passwd --stdin $name`;

		}
		else
			echo '<label class="alert alert-danger">User'.$name.' does not exist!!</label>';
	}
}
else
header("location:index.php");