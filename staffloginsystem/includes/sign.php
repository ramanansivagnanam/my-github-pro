<?php
   mysql_connect('localhost','root','');
  mysql_selectdb('ramanan');
if(isset($_POST['submit']))
{    
  $username = $_POST['user_name'];
  $password = $_POST['user_pwd'];
  $confirmpassword = $_POST['user_confirmpwd'];
  $email = $_POST['user_email'];
  $mobileno =$_POST['user_mobileno'];
  $check = "SELECT * FROM users WHERE user_name ='$username'";
    $resultcheck = mysql_query($check);
    if(mysql_num_rows($resultcheck) > 0)
    {
        echo "username  already exits";
    }
    else
    {
         if($password == $confirmpassword)
    {
              $sql = "INSERT INTO users(user_name,user_pwd,user_confirmpwd,user_email,user_mobileno) VALUES('$username','$password','$confirmpassword','$email','$mobileno')";
   $result =mysql_query($sql);
    header("Location: ../login.php");
        exit();
    }
    else
    {    
     header("Location: ../signup.php?signup=check your passwords");
        exit();
    }
}
}
else
{
   echo "sign up failed";
}  
?>
