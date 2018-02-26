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
  <div class="col-sm-6 " style="margin-top:100px">
<form action="requestbloodser.php" method="post" ><!--class cointainer is used to shrink the elements
  clss cointainer-fluid is used to stretch the eleents-->
<h2 style="color:red">Request for Blood</h2>
<div class="form-group">
  <label for="name">UserName:</label>
  <input type="text" name="uname" class="form-control" id="name" placeholder="Enter Your Name" autofocus required>
</div>
<div class="form-group">
  <label for="email">Email address:</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="Enter email id" autofocus required>
</div>


<div class="form-group">
  <label for="ph">Phone number:</label>
  <input type="number" name="ph" class="form-control" id="ph" placeholder="Enter Phone number" autofocus required> <!--div tg is used to create classes-->
</div>

<div class="radio">
  <lable for="gender">Gender:</lable><br>

      <label style="color:black"><input type="radio" name="gender" value="M">Male</label>
    </div>
    <div class="radio" style="color:black">
      <label><input type="radio" name="gender" value="F">Female</label>
    </div>
    <div class="radio" style="color:black">
      <label><input type="radio" name="gender" value="O" >Others</label>
    </div>

<div class="form-group">
  <label for="bloodgrp">Blood Group Required:</label>
   <select name="bloodgrp" style="color:black">
     <option value="A+">A+</option>
     <option value="A-">A-</option>
     <option value="B+">B+</option>
     <option value="B-">B-</option>
     <option value="AB+">AB+</option>
     <option value="AB-">AB-</option>
     <option value="O+">O+</option>
     <option value="O-">O-</option>
   </select>
 </div>
 <div class="form-group">
   <label for="town">Enter location:</label>
   <input type="text" name="town" class="form-control" id="town" placeholder="Enter your location" autofocus required>
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

</div>
<div class="col-sm-3"></div>
</div>


 <?php
 require 'footer.inc.php';
  ?>
