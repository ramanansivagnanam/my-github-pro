<?php
    session_start();
    mysql_connect('localhost','root','');
    mysql_selectdb('ramanan');
 if(isset($_POST['submit']))
 {
       header("Location: logout.php");
       session_destroy();
       exit();
  }
     else
     {
      echo "check your code";
     }
 ?>
