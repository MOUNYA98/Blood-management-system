<?php
require 'core.inc.php';
?>
<?php
require 'header.inc.php';
 ?>
 <?php
 require 'nav.inc.php';
  ?>
  <div class="container">
    <div class="col-sm-3"></div>
    <div class="col-sm-6" style="color:red;margin-top:100px">
  <form action="successfulrecover1.php" method="post" ><!--class cointainer is used to shrink the elements
    clss cointainer-fluid is used to stretch the eleents-->
    <div class="form-group">
      <label for="phn">Enter Phone Number:</label>
      <input type="number" name="ph" class="form-control" id="phn" placeholder="Enter Phone number" autofocus required>
    </div>
  <div class="form-group">
    <label for="password">Enter your New password:</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" autofocus required>
  </div>

  <br>
  <button type="submit" class="btn btn-primary" style="background-color:red">Change Password</button>
    </form>

<?php
require 'footer.inc.php';
?>
