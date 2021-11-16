<?php
   session_start();
   unset($_SESSION["userEmail"]);
   unset($_SESSION["password"]);
   unset($_SESSION["isreg"]);
   
   echo 'You have cleaned session';
   header('Refresh: 0; URL = home.php');
?>