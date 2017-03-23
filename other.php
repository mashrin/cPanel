<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{echo' 

<div class="page-header">
  <h1>Command Shell<small> &nbsp;&nbsp; execute commands in sh-3.00#</small></h1>
</div>

<center>
<div class="container">
  <form action="execute.php" method="post" class="form-signin">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Enter Command " name="exe">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Execute!</button>
       
      </span> </form>
    </div></div>
  </center>
</body>
</html>';
}
else
header("location:index.php");
	