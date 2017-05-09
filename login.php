<?php include 'view/header.php'; ?>
<!doctype html>
<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Get Going now</h2><br>
      <h4>To access your account, please enter your username and password and then click on the "Login" button. If this is your first time here, click on the "Create" button to create an account.</h4>
      <br>
    </div>
  </div>
</div>
      

<hr>
<div class="container" style="width: 38%;position: relative;center: -30%;background: #F08080;padding: 8px 10px 8px 12px;color: #DC143C;border-radius: 7px;" >

  <h2>Log In</h2>
  <form method="post" action="index.php" >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" value="">
    </div>
    <div class="form-group">
      <input type="hidden" name="action" class="form-control" value="test_user_valid">
    </div>
    <input type="submit" name="login" value="Login" class="btn btn-default">
  </form><br>
    </div>
  </div>
</div>

<div class="container">
  <h2>Create your Account</h2>
  <form method="post" action="signup_process.php">
    <input type="submit" value="Create Account" class="btn btn-default">
  </form>
</div>

</body>
</html>
<?php include 'view/footer.php'; ?>