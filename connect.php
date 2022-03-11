<?php
  $db_server ="localhost";
  $db_name="helpingbuy";
  $db_user="root";
  $db_password="password";

  $db = mysql_connect( $db_server, $db_user, $db_password, $db_name);

  if($db)
	 {
     $select_db=mysql_select_db($db_name);
     if($select_db) {
      //echo "Database connected! & selected DB".$db_name;
     }
     else {
      echo mysql_error();
	    }
}
else{
  echo mysql_error();
}
//mysql_select_db($db_name, $dbhandle);
 ?>
