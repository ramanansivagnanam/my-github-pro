<?php
   session_start();
   mysql_connect('localhost','root','');
   mysql_selectdb('ramanan');
if(isset($_POST['submit']))
{
    $username = $_POST['user_name'];
    $password = $_POST['user_pwd'];
    $sql = "SELECT * FROM users where user_name like '$username' AND user_pwd like '$password'";
    $result = mysql_query($sql);
    if($result)
    {
    while($row = mysql_fetch_array($result))
    {
     $_SESSION['user_id'] = $row['user_id'];
     $_SESSION['user_name'] = $row['user_name'];
     $_SESSION['user_email']= $row['user_email'];
     $_SESSION['user_mobileno'] = $row['user_mobileno'];
     header("Location: geoloc.php");
     exit();
    }
  }
     else
     {
        header("Location: login.php?login=check entered details");
         exit();
     }
    mysql_close();
}
?>
