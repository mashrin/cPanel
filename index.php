<?php
ob_start();
session_start();
$a = "default";
$a = $_SESSION['flag'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/login.css" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<script src="js/bootstrap.min.js"> </script>
<script src="js/bootstrap.js"></script>
<title>NetMin</title>
</head>
<?php

if($a == "not_root")
{echo '

<body background="bg.jpg" >

	<div class="container">
      <form class="form-signin" role="form" action="login.php" method="post">
      <h2 class="form-signin-heading">Please sign in</h2>
      <input type="text"  name="name" class="form-control " placeholder="User Name"  required autofocus>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <div>
	  	<input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign In">	
      	<br>
		<center><label class="alert alert-danger" align="center">Permission Denied!!</label>
	  </div>
      </form>
	</div>
</body>
</html>
';
}

else if($a == "wrong_input")
{echo '

<body background="bg.jpg" >

<div class="container">

      <form class="form-signin" role="form" action="login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text"  name="name" class="form-control " placeholder="User Name"  required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        
        <div><input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign In">	
      <br>
		<center><label class="alert alert-danger" align="center">User Name and Password do not match!!</label></div>
    </div>
	</form>
</body>
</html>
';
}

else if($a=="default")
{
echo '

<body background="bg.jpg" >

<div class="container">

      <form class="form-signin" role="form" action="login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text"  name="name" class="form-control " placeholder="User Name"  required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign In">	
		 <br>
		<center><label class="alert alert-danger" align="center">Please login first!!</label></div>
      </form>
	
    </div>
</body>
</html>
';	
}
else 
{echo '

<body background="bg.jpg">

<div class="container">

      <form class="form-signin" role="form" action="login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text"  name="name" class="form-control " placeholder="User Name"  required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        
        <div><input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign In">	
     
    </div>
	</form>
</body>
</html>
';
}

session_destroy();
?>