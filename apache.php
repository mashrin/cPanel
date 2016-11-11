<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	
echo '
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/apache.png" alt="1/0">
      <div class="caption">
        <h3>Create New Virtual Server </h3>
        <p>Used for apache web hosting.</p>
 		<form action="apache1.php" method="post">      
        <p><button class="btn btn-primary" name="apache-option" value="create">Create New</button> 	
</p></form>
        
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/apache.png" alt="1/0">
      <div class="caption">
        <h3>Delete Virtual Server</h3>
        <p>Delete an existing web hosting.</p>
		<form action="apache1.php" method="post">
        <p><button class="btn btn-primary" name="apache-option" value="delete">Delete Existing</button> 	
</p></form>
      </div>
    </div>
  </div>
</div>';
}
else
header("location:index.php");