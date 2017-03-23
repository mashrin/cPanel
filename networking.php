<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{echo '

<div>
<div class="row">
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/user.jpg" alt="1/0">
      <div class="caption">
        <h3>NetConfig</h3>
        <p>Use to change IP, Mask, Gateway and Primary DNS.</p>
        <form action="netconfig.php" method="post">
        <p><button class="btn btn-primary" name="netconfig" value="static">Set IP</button>
	  	<button class="btn btn-primary" name="netconfig" value="dynamic">Obtain Dynamically</button></p>
        </form>
      </div>
    </div>
  </div>
  
</div>
</div>



';
}
else
header("location:index.php");
	