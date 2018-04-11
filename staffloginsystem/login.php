<?php
session_start();
 include_once 'header.php';
?>
<form  class ="col-md-4 col-md-offset-4" action="log.php" method="post">

<div>

<img src="login.png" alt="no image" class="center-block  img-circle"/ ><hr>
  <div class="form-group has-feedback has-feedback-right">
    <label class="control-label">Username</label>
    <input type="text" class="form-control" id="name" name ="user_name" placeholder="Name" required>
    <i class="form-control-feedback glyphicon glyphicon-user "></i>
  </div>
  <div class="form-group has-feedback has feedback-right">
    <label  class="control-label">Password</label>
    <i class="form-control-feedback glyphicon glyphicon-lock"></i>
    <input type="password" class="form-control" id="exampleInputPassword1" name="user_pwd"  placeholder="Password" required>
<small id="small-content" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <button type="submit" name="submit" class="btn btn-primary center-block
glyphicon glyphicon-arrow-right" id="sub-button">LogIn</button><br><br>
    </div>
</form>
<?php
 include_once 'footer.php';
?>
