<?php
  $dbhost="localhost";
  $dbname="sauvetage et distribution alimantaire";
  $dbuser="root";
  $dbpass="";
  $dbconn= mysql_connect($dbhost,$dbuser,$dbpass);

   if(!$conn) {
    die('could not connect:'.mysql_erro());
   }
   echo 'connected successfully';
   mysql_close($conn);
?>