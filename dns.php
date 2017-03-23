<?php
include("header.php");
if($_SESSION['flag']=="allowed")
{
	
	echo'


<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/dns.png" alt="1/0">
      <div class="caption">
        <h3>Master Zone</h3>
        <p>Manage Master Records.</p>
       
        <p>
			<form action="zone.php" method="post">
				<button class="btn btn-primary" name="sub-dns" value="master-create">Create</button>
				<button class="btn btn-primary" name="sub-dns" value="master-del">Delete</button>

			</form>
		</p>
        
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/dns.png" alt="1/0">
      <div class="caption">
        <h3>Slave Zone</h3>
        <p>Manage Slave Records.</p>
       
        <p>
			<form action="zone.php" method="post">
				<button class="btn btn-primary" name="sub-dns" value="slave-create">Create</button>
				<button class="btn btn-primary" name="sub-dns" value="slave-del">Delete</button>

			</form>
		</p>
        
      </div>
    </div>
  </div>
  
  
 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/dns.png" alt="1/0">
      <div class="caption">
        <h3>Forward Zone</h3>
        <p>Manage Forward Records.</p>
       
        <p>
			<form action="zone.php" method="post">
				<button class="btn btn-primary" name="sub-dns" value="forward-create">Create</button>
				<button class="btn btn-primary" name="sub-dns" value="forward-del">Delete</button>

			</form>
		</p>
        
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/dns.png" alt="1/0">
      <div class="caption">
        <h3>Add to Existing Zone</h3>
        <p>Edit Existing Records.</p>
       
        <p>
			<form action="zone.php" method="post">
				<button class="btn btn-primary" name="sub-dns" value="add-a">A Record</button>
				<button class="btn btn-primary" name="sub-dns" value="add-ns">NS Record</button>
				<button class="btn btn-primary" name="sub-dns" value="add-mx">MX Record</button>
			</form>
		</p>
        
      </div>
    </div>
  </div>
  
    
  
</div>
</body>
';
}
else
header("location:index.php");