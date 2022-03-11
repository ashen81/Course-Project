<html>
<body>

<?php
include ("header.php");
?>
<br>



<?php session_start(); ?>

<?php

unset($_SESSION['username']);
echo '<h6>Logout Succefully!<h6>';

?>

<?php
include("footer.php");
?>

</body>
</html>
