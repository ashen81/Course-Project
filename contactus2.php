<html>
<?php
include ("header.php");
?>

<body>
<?php
  if (isset($_POST['submit']))  {
    $admin_email = "hshen@student.touro.edu";
    $name =$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    mail($admin_email, $subject, $message, "From: " .$email  );
    echo "<h6>Thank you for contacting us!<h6>";
  }
  else{
    header('location: contactus.php');
    	exit(0);
  }
?>

<?php
include("footer.php");
?>
</body>
</html>
