<?php include 'view/header.php'; ?>


<html>
<body>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
  <h2>Account Details</h2><br>
  <h4>This is your account home. Please enter your information and click on the "Sign In" button to create an account.</h4>
      <br>
    </div>
  </div>
</div>
      


<div class="container" style="width:45%;position: relative;left: -10%;background: #F08080;padding: 8px 10px 8px 12px;color: #000000;border-radius: 7px;">
  <h2>User Profile</h2>
  <form method="post" action="createaccount.php">
    <div class="form-group">
      <!-- <label>Email:</label> -->
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <!-- <label>Password:</label> -->
      <input type="password" name="password" class="form-control" id="email" placeholder="Enter password">
    </div>
    <div class="form-group">
      <!-- <label>First Name:</label> -->
      <input type="text" name="fname" class="form-control" id="email" placeholder="Enter first name">
    </div>
    <div class="form-group">
      <!-- <label>Last Name:</label> -->
      <input type="text" name="lname" class="form-control" id="email" placeholder="Enter last name">
    </div>
    <div class="form-group">
      <!-- <label>Phone Number:</label> -->
      <input type="text" name="phone" class="form-control" id="email" placeholder="Enter phone number">
    </div>
    <div class="form-group">
      <!-- <label>Date of Birth:</label> -->
      <input type="date" name="birhtday" class="form-control" id="pwd" >
    </div>
    <div class="form-group">
      <!-- <label>Gender:</label> -->
      <input type="text" name="gender" class="form-control" id="pwd" placeholder="Enter gender">
    </div>
    <input type="submit" action="createaccount.php" value="Sign In" class="btn btn-default">
  </form>
</div><br>
</body>
</html>


<?php include 'view/footer.php'; ?>


