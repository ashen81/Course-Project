<html>
<head>
<?php
include ("header.php");
?>


<body>
<h6>Sign In</h6>

<form action ="signin2.php" method="post">
<div class="container">
  <ul>
			Username: <br>
			<input class="login" type="text" name="username"><br>
			Password: <br>
      <input class="login" type="password" name="password"><br>

      <input class="login"  type="submit" name="submit" value="Sign In"> <br>
    </ul>
</div>
<?php
include("footer.php");
?>

</body>

</html>
