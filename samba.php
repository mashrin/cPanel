<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	echo '
	<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/samba.png" alt="1/0">
      <div class="caption">
        <h3>Convert Users</h3>
        <p>Convert the unix user to the samba user. </p>
        <form action="samba1.php" method="post">
        <p><button class="btn btn-primary" name="samba1" value="convert">Convert</button></p>
        </form>
      </div>
    </div>
  </div>
  
  
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/samba.png" alt="1/0">
      <div class="caption">
        <h3>Create New Share</h3>
        <p>Create new file share.</p>
		<form action="samba1.php" method="post">
        <p><button class="btn btn-primary" name="samba1" value="create">Create</button></p>
        </form>
      </div>
    </div>
  </div>
  
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/samba.png" alt="1/0">
      <div class="caption">
        <h3>Undo File Share</h3>
        <p>Undo existing file share.</p>
       
		<form action="samba1.php" method="post">
        <p><button class="btn btn-primary" name="samba1" value="undo">Undo</button></p>
        </form>
          
      </div>
    </div>
  </div>
  
  
</div>
<div class="row">
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/samba.png" alt="1/0">
      <div class="caption">
        <h3>Change Passowrd</h3>
        <p>Change Password for Samba User.</p>
		<form action="samba1.php" method="post">
        <p><button class="btn btn-primary" name="samba1" value="change">Change</button></p>
        </form>      
    </div>
  </div>
</div>';
	
	
}
else
header("location:index.php");