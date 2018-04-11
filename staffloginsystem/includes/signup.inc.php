<?php
 include_once 'dbh.inc.php';
  if(isset($_POST['sumbit']))
  {
     
      /*$username = mysql_real_escape_string($connection,$_POST['user_name']);
      $password = mysql_real_escape_string($connection,$_POST['user_pwd']);
      $confirmpassword = mysql_real_escape_string($connection,$_POST['user_confirmpwd']);
      $email = mysql_real_escape_string($connection,$_POST['user_email']);
      $mobileno = mysql_real_escape_string($connection,$_POST['user_mobileno']);*/
      $username = $_POST['user_name'];
        $password = $_POST['user_pwd'];
         $confirmpassword = $_POST['user_confirmpwd'];
          $email = $_POST['user_email'];
          $mobileno =$_POST['user_mobileno'];
    /* $sql = "SELECT * FROM users WHERE  user_id='$mobileno'";
    $result = mysqli_query($connection,$sql);
$resultCheck = mysql_num_rows($result);
/*if($resultCheck > 0)
{
header("Location: ../signup.php?signup=usertaken");
exit();   
}
else
{*/
                          //hashing the password
$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
$hashedconfirmpwd = password_hash($confirmpassword,PASSWORD_DEFAULT);
                          //insert the users into database 
                        $sql = "INSERT INTO users(user_name,user_pwd,user_confirmpwd,user_email,user_mobileno) VALUES('$username','$hashedpwd','$hashedconfirmpwd','$email','$mobileno')";
                        mysql_query($sql);
                          header("Location: ../signup.php?signup=sucess");
                      //exit();
                      
  }
    
else
{
    header("Location: ../signup.php?signup=failure to upload");
    exit();
}
?>