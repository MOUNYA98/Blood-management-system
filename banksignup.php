<?php
require 'core.inc.php';
?>
<?php
require 'header.inc.php';
?>
<?php
require 'nav.inc.php';
 ?>

<div class="container" style="color:red">
  <div class="col-sm-3"></div>
  <div class="col-sm-6" style="margin-top:100px">
<form action="bankser.php" method="post" ><!--class cointainer is used to shrink the elements
  clss cointainer-fluid is used to stretch the eleents-->
<h2 style="color:red">Blood Bank Registration</h2>
<div class="form-group">
  <label for="name">Name:</label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Organisation Name" autofocus required>
</div>
<div class="form-group">
  <label for="name">User Name:</label>
  <input type="text" name="uname" class="form-control" id="name" placeholder="Choose a User Name" autofocus required>
</div>
<div class="form-group">
  <label for="email">Email address:</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="Enter Organisation email id" autofocus required>
</div>
<div class="form-group">
  <label for="pwd">Create Password:</label>
  <input type="password" name="pwd" class="form-control" id="pwd" placeholder="choose a password" autofocus required>
</div>
<div class="form-group">
  <label for="ph">Phone number:</label>
  <input type="number" name="ph" class="form-control" id="ph" placeholder="Enter Phone number" autofocus required> <!--div tg is used to create classes-->
</div>
<div class="form-group">
  <label for="city">Enter Location:</label>
  <input type="text" name="location" class="form-control" id="location" placeholder="Enter your location" autofocus required>
</div>
<div class="form-group">
  <label for="city">Enter City:</label>
  <input type="text" name="city" class="form-control" id="city" placeholder="Enter your city" autofocus required>
</div>
<div class="form-group">
  <label for="state">Enter State:</label>
  <input type="text" name="state" class="form-control" id="state" placeholder="Enter your state" autofocus required>
</div>
<div class="form-group">
  <label for="coun">Enter country:</label>
  <input type="text" name="coun" class="form-control" id="coun" placeholder="Enter your country" autofocus required>
</div>

<button type="submit" class="btn btn-primary" style="background-color:red">Submit</button>
  </form>

</div>
<div class="col-sm-3"></div>
</div>


 <?php
 require 'footer.inc.php';
  ?>
