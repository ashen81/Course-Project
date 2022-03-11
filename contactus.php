<html>
<head>
<?php
include ("header.php");
?>


<body>
<h6>Contact us</h6>

<form action ="contactus2.php" method="post">

Name: <input class="nice" type="text" name="name" value=""/><br>
Email: <input class="nice" type="text" name="email" value=""/><br>
Subject: <input class="nice" type="text" name="subject" value=""/><br>
Message: <textarea class="nice" name="message" rows=10 cols=60> </textarea> <br>


<input type="submit" name="submit" value="Send"> <br>

</form>

<?php
include("footer.php");
?>

</body>

</html>
