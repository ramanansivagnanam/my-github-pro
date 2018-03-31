<?php
   mysql_connect('localhost','root','');
  mysql_selectdb('ramanan');
if(isset($_POST['LogIn']))
{    
    $username = $_POST['user_name'];
    $password = $_POST['user_pwd'];
    $sql = "SELECT * FROM users where $username ='$username'";
    $result =  mysql_query($sql);
    $resultcheck = mysql_num_rows($result);
    if($resultcheck <= 0)
    {
    header("Location: ../geoloc.php");
    exit();
    }
    else{
        echo "check your program";
    }
}
else
{ 
        echo "check username and password entered correctly";
        exit();    
}
?>   
  