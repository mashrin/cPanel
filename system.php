<?php
include("header.php");
//echo $_SESSION['flag'];
if($_SESSION['flag']=="allowed")
{
	echo'
<div>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/1_0.jpg" alt="1/0">
      <div class="caption">
        <h3>Reboot/Shutdown</h3>
        <p>Use to Reboot/Shutdown the system.</p>
        <form action="power.php" method="post">
        <p><button class=" btn btn-primary" name="sub" value="reboot" >Reboot</button>
		<button class="btn btn-primary" name="sub" value="off" >Shut Down</button></p>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/log.jpg" alt="1/0">
      <div class="caption">
        <h3>System Logs</h3>
        <p>Use to check the system logs.</p>
        <p><a href="logsmessages.php" class="btn btn-primary" role="button">View logs</a> </p>
      </div>
    </div>
  </div>
  
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/user.png" alt="1/0">
      <div class="caption">
        <h3>Users and Groups</h3>
        <p>Use to view the system users and groups.</p>
        <form method="post" action="passwd.php">
        <p><button class="btn btn-primary" role="button" name="function" value="view">View</button></form>
          </p>
      </div>
    </div>
  </div>
  
</div>
</div>
<br>

<div>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/user.jpg" alt="1/0">
      <div class="caption">
        <h3>Users</h3>
        <p>Use to create and delete users.</p>
        <form method="post" action="user.php">
        <p><button class="btn btn-primary" role="button" name="function" value="add">Add</button>
       <button class="btn btn-primary" role="button" name="function" value="delete">Delete</button>
       </p>
        </form>
      </div>
    </div>
  </div>
  
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/group.png" alt="1/0">
      <div class="caption">
        <h3>Groups</h3>
        <p>Use to create and delete groups.</p>
        <form method="post" action="group.php">
        <p><button class="btn btn-primary" role="button" name="function" value="add">Add</button>
       <button class="btn btn-primary" role="button" name="function" value="delete">Delete</button>
       </p>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/fw.png" alt="1/0">
      <div class="caption">
        <h3>Firewall</h3>
        <p>Managne system security using firewalls.</p>
        <form method="post" action="firewall.php">
        <p><button class="btn btn-primary" role="button" name="function" value="conf">Configure</button>
       <button class="btn btn-primary" role="button" name="function" value="services">Check Serivces</button>
       </p>
        </form>
      </div>
    </div>
  </div>
  
  
  
</div>
</div>
</body>
</html>';
}
else
header("location:index.php");
?>
	