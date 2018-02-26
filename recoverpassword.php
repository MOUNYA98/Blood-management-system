<?php
require 'core.inc.php';
?>
<?php
require 'header.inc.php';
 ?>
<?php require 'nav.inc.php' ?>
  <div class="container">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" style="color:red;margin-top:100px">
  <form action="successfulrecover.php" method="post" ><!--class cointainer is used to shrink the elements
    clss cointainer-fluid is used to stretch the eleents-->
    <div class="form-group">
      <label for="email">Enter Email address:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email id" autofocus required>
    </div>
  <div class="form-group">
    <label for="password">Enter your New password:</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" autofocus required>
  </div>


  <a href="recoveremail.php">Forgot email?</a>
    <br>
  <button type="submit" class="btn btn-primary" style="background-color:red">Change Password</button>
    </form>

<?php
require 'footer.inc.php';
?>
