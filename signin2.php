<?php session_start(); ?>
<html>
<head>
<?php
include ("header.php");
?>
</head>

<body>

<?php

include ("connect.php");

  $username= $_POST['username'];
  $password= $_POST['password'];


if($_POST['username'] == $username && $_POST['password'] == $password)
  {
    setcookie('username', $username, time() +2000); // set cookies
    $res=mysql_query("SELECT * FROM users WHERE username='$username'");
    if($res) {

        while($row=mysql_fetch_row($res))
        {
          echo '<h6>Login Successfully!<br></h6>;
          <table>
            <tr>
              <th>Username: </th>
              <td>'.$row[1].'</td>
            </tr>
            <tr>
              <th>Password: </th>
              <td>'.$row[2].'</td>
            </tr>
            <tr>
              <th>First Name: </th>
              <td>'.$row[3].'</td>
            </tr>
            <tr>
              <th>Last Name: </th>
              <td>'.$row[4].'</td>
            </tr>
            <tr>
              <th>Email: </th>
              <td>'.$row[5].'</td>
            </tr>
            <tr>
              <th>Address1: </th>
              <td>'.$row[6].'</td>
            </tr>
            <tr>
              <th>Address2: </th>
              <td>'.$row[7].'</td>
            </tr>
            <tr>
            <th>City: </th>
            <td>'.$row[8].'</td>
            </tr>
            <tr>
              <th>State: </th>
              <td>'.$row[9].'</td>
            </tr>
            <tr>
              <th>Zipcode: </th>
              <td>'.$row[10].'</td>
            </tr>
            <tr>
              <th>Country: </th>
              <td>'.$row[11].'</td>
            </tr>
            <tr>
              <th>Phone: </th>
              <td>'.$row[12].'</td>
            </tr>
          </table>';
          echo"<a href='logout.php'>Logout</a>";
          }
        }
      else
      {
         echo "<h5>Please enter your username and password!</h5><br>";
        echo "<a href='signin.php'>Sign In</a>";
      }

  }
  else
  {
    echo "<h6> Can't login. Try again!<h6>";
    echo "<a href='signin.php'>Sing In</a>";
  }
?>

<?php
include("footer.php");
?>

</body>

</html>
