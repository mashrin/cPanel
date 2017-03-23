<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{




$function = $_POST['function'];

if($function=="add")
  {
	  
	  
echo '
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">Add Group</li>
</ol>
<div class="container" align="center">
	<div class="container">
      <form class="form-signin" role="form" action="group1.php" method="post">
      <h2 class="form-signin-heading">Add New Group</h2><br>
      <input type="text" name="name" class="form-control" placeholder="Enter Group Name" required><br>
	  
      <div>
	  	
	  	<button class="btn btn-primary" name="sub" value="sub1">Add Group</button> 	
	  </div>
      </form>';
    
  }
  
if($function=="delete")
  {
	 
echo '
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="system.php">Systems</a></li>
  <li class="active">Delete Group</li>
</ol>
<div class="container" align="center">
	<div class="container">
      <form class="form-signin" role="form" action="group1.php" method="post">
      <h2 class="form-signin-heading">Delete Group</h2><br>
      <input type="text" name="name" class="form-control" placeholder="Enter Group Name to be Deleted" required><br>
	  
      <div>
	  	
	  	<button class="btn btn-primary" name="sub" value="sub2">Delete</button> 	
	  </div>
      </form>';
  }  
echo'
</div>
</body>
</center>
</html>';
}


else
header("location:index.php");
?>