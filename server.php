<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	echo'
<div>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/dns.png" alt="1/0">
      <div class="caption">
        <h3>Bind DNS </h3>
        <p>Use to bind DNS records.</p>
       
        <p><a href="dns.php" class="btn btn-primary" role="button">Setup DNS</a> </p>
        
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/apache.png" alt="1/0">
      <div class="caption">
        <h3>Apache</h3>
        <p>Use for web hosting.</p>
        <p><a href="apache.php" class="btn btn-primary" role="button">Setup Apache</a> </p>
      </div>
    </div>
  </div>
  
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/samba.png" alt="1/0">
      <div class="caption">
        <h3>Samba</h3>
        <p>Use to view the system users and groups.</p>
       
        <p><a href="samba.php" class="btn btn-primary" role="button">Setup Samba</a> </form>
          
      </div>
    </div>
  </div>
  
</div>
</div>
<br>
<div>

<!--<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/1_0.jpg" alt="1/0">
      <div class="caption">
        <h3>Bind DNS </h3>
        <p>Use to bind DNS records.</p>
       
        <p><a href="dns.php" class="btn btn-primary" role="button">Setup DNS</a> </p>
        
      </div>
    </div>
  </div>
  
  
</div>--!>

';
}
else
header("location:index.php");
?>