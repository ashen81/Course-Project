<html>
<head>
<?php
include ("header.php");
?>
</head>

<body>

<h6>Sign Up</h6>
<?php


include ("connect.php");

if(
  isset($_POST['username'])&&($_POST['username'] !='') &&
  isset($_POST['password'])&&($_POST['password'] !='') &&
  isset($_POST['firstname'])&&($_POST['firstname'] !='') &&
  isset($_POST['lastname'])&&($_POST['lastname'] !='') &&
  isset($_POST['email'])&&($_POST['email'] !='') // &&
  //isset($_POST['address1'])&&($_POST['address1'] !='') &&
  //isset($_POST['address2'])&&($_POST['address2'] !='') &&
  //isset($_POST['city'])&&($_POST['city'] !='') &&
  //isset($_POST['state'])&&($_POST['state'] !='') &&
  //isset($_POST['zipcode'])&&($_POST['zipcode'] !='') &&
  //isset($_POST['country'])&&($_POST['country'] !='') &&
  //isset($_POST['phone'])&&($_POST['phone'] !='')
  //isseet($_POST['Register']);
  )
{
  $username= $_POST['username'];
  $password= $_POST['password'];
  $firstname= $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $email= $_POST['email'];
  $address1= $_POST['address1'];
  $address2= $_POST['address2'];
  $city= $_POST['city'];
  $state= $_POST['state'];
  $zipcode= $_POST['zipcode'];
  $country= $_POST['country'];
  $phone= $_POST['phone'];



  $sql="
    INSERT INTO users (
        username,
        password,
        firstname,
        lastname,
        email,
        address1,
        address2,
        city,
        state,
        zipcode,
        country,
        phone
    ) VALUES (
        '$username',
        '$password',
        '$firstname',
        '$lastname',
        '$email',
        '$address1',
        '$address2',
        '$city',
        '$state',
        '$zipcode',
        '$country',
        '$phone'
        )";


  $res=mysql_query($sql);


  if($res)
  {
        echo '<h6>Thank you for your submission!<br></h6>
        <table>
            <tr>
              <th>Username: </th>
              <td>'.$_POST['username'].'</td>
            </tr>
            <tr>
              <th>Password: </th>
              <td>'.$_POST['password'].'</td>
            </tr>
            <tr>
              <th>First Name: </th>
              <td>'.$_POST['firstname'].'</td>
            </tr>
            <tr>
              <th>Last Name: </th>
              <td>'.$_POST['lastname'].'</td>
            </tr>
            <tr>
              <th>Email: </th>
              <td>'.$_POST['email'].'</td>
            </tr>
            <tr>
              <th>Address1: </th>
              <td>'.$_POST['address1'].'</td>
            </tr>
            <tr>
              <th>Address2: </th>
              <td>'.$_POST['address2'].'</td>
            </tr>
            <tr>
              <th>City: </th>
              <td>'.$_POST['city'].'</td>
            </tr>
            <tr>
              <th>State: </th>
              <td>'.$_POST['state'].'</td>
            </tr>
            <tr>
              <th>Zipcode: </th>
              <td>'.$_POST['zipcode'].'</td>
            </tr>
            <tr>
              <th>Country: </th>
              <td>'.$_POST['country'].'</td>
            </tr>
            <tr>
              <th>Phone: </th>
              <td>'.$_POST['phone'].'</td>
            </tr>
     </table>';
       }
  else
  {
    echo mysql_error();
  }
}
else
{
  echo "<h6><span>*</span> is required.<br><br> Please fill the empty field!!<h6>";
  echo "<a href='signup.php'>Click here</a>";
}
?>

<?php
include("footer.php");
?>
</body>
</html>
