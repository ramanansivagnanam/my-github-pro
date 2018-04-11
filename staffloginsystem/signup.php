<?php
   session_start();
   include_once 'header.php';
?>
<form  class ="col-md-4 col-md-offset-4" action="sign.php" method="post">

<div>

<img src="signup.png" alt="no image" class="center-block img-responsive "/ ><hr>
  <div class="form-group has-feedback has-feedback-left">
    <label class="control-label">Username</label>
    <input type="text" class="form-control" id="name"  name="user_name"placeholder="Name" required>
    <i class="form-control-feedback glyphicon glyphicon-user "></i>
  </div>
  <div class="form-group has-feedback has feedback-left">
    <label  class="control-label">Password</label>
    <input type="password" class="form-control" id="password" name="user_pwd" placeholder="Password"  required/>
       <span id="message"></span>
      <i class="form-control-feedback glyphicon glyphicon-lock"></i>
    </div>
     <div class="form-group has-feedback has feedback-left">
    <label  class="control-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirmpassword" name="user_confirmpwd"placeholder="Confirm Password" required/>
         <span id="message"></span>
  <i class="form-control-feedback glyphicon glyphicon-lock"></i>
    </div>
          <div class="form-group has-feedback has feedback-left">
    <label  class="control-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail" name="user_email" placeholder="email" onchange="check()" required/>
  <i class="form-control-feedback glyphicon glyphicon-envelope"></i>
    </div>
     <div class="form-group has-feedback has feedback-left">
    <label  class="control-label">Mobile number</label>
    <input type="text" class="form-control" id="exampleInputPhonenumber" name="user_mobileno"placeholder="mobile no" onchange="check()"required/>
  <i class="form-control-feedback glyphicon glyphicon-phone"></i>
    </div>

    <button type="submit" class="btn btn-primary center-block" id="sub-button" name="submit">SignUp</button><br><br>

    </div>
    </form>
    <!-- validating passwords -->
    <script type=text/javascript>
        function check(){
        if(document.getElementById('password').value ===
     document.getElementById('confirmpassword').value)
            {
                document.getElementById('message').innerHTML=("matched");
                document.getElementById('message').style.color=('green');
            }
            else
                {
                    document.getElementById('message').innerHTML=("re-enter your passwords");
                    document.getElementById('message').style.color=('red');
                }
        }
    </script>
<?php
include_once 'footer.php';
?>
