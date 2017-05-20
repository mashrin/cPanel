<?php


include 'header.php';

if($_SESSION['flag']=="allowed")
{echo '


<div class="container">
<div class="jumbotron">
  <h1>Hello, world!</h1>
  
  <blockquote>
  <p>Welcome to open-source Network management tool. A web utility to manage your server.</p>
  <footer>Developed By <cite title="Source Title">Mashrin and Saumya</cite></footer>
</blockquote>
  <form action="ip.php" method="post">
  <p><button class="btn btn-primary btn-lg" role="button" name="sub" value="ip">Know your IP!</button>
  <button class="btn btn-primary btn-lg" role="button" name="sub" value="who">Check WHO!!</button></p>
  </form>

  </div>
</div>
</center>
</body>
</html>';
}
else
{
	header("location:index.php");
}
?>
