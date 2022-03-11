<html>
<head>
<?php
include ("header.php");
?>


<body>
<h6>Sign Up</h6>

<form action ="register.php" method="post">
<div class="container">
	<p>* is required</p>
	<ul>
			Username<span>*</span>: <br>
			<input class="nice" type="text" name="username"><br>
			Password<span>*</span>: <br>
			<input class="nice" type="password" name="password"><br>
			First Name<span>*</span>:<br>
			<input class="nice" type="text" name="firstname" > <br>
			Last Name<span>*</span>:<br>
			<input class="nice" type="text" name="lastname" > <br>
			Email<span>*</span>:<br>
			<input class="nice" type="text" name="email" > <br>
			Address1:<br>
			<input class="nice" type="text" name="address1" > <br>
			Address2:<br>
			<input class="nice" type="text" name="address2" > <br>
			City:<br>
			<input class="nice" type="text" name="city" > <br>
			State:<br>
			<input class="nice" type="text" name="state" > <br>
			Zipcode:<br>
			<input class="nice" type="text" name="zipcode" > <br>
			Country<span>*</span>:<br>
			<select class="nice" name="country">
				<option value="Taiwan"> Taiwan
				<option value="China"> China
				<option value="UK"> United Kingdom
				<option value="Canada"> Canada
				<option value="Japan"> Japan
				<option value="US"  SELECTED> United States
			</select><br>
			Phone:<br>
			<input class="nice" type="text" name="phone" > <br>

			<input class="centered" type="submit" name="submit" value="Register"> <br>

	</ul>
</form>
</div>

<?php
include("footer.php");
?>

</body>

</html>
