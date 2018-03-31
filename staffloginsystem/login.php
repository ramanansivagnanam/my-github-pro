<?php
 include_once 'header.php';
?>
<form  class ="col-md-4 col-md-offset-4" action="log.php">

<div> 

<img src="login.png" alt="no image" class="center-block img-responsive"/ ><hr>
  <div class="form-group has-feedback has-feedback-left">
    <label class="control-label">Username</label>
    <input type="text" class="form-control" id="name" placeholder="Name" required> 
    <i class="form-control-feedback glyphicon glyphicon-user "></i>
  </div>
  <div class="form-group has-feedback has feedback-left">
    <label  class="control-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"required>
  <i class="form-control-feedback glyphicon glyphicon-lock"></i>
<small id="small-content" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary center-block" id="sub-button">LogIn</button><br><br>
</form>
</div>
<?php
 include_once 'footer.php';
?>
