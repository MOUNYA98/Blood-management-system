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
      <form action="checkdonardisp.php" method="post" ><!--class cointainer is used to shrink the elements
        clss cointainer-fluid is used to stretch the eleents-->
        <h2>Donar Details</h2>
        <div class="form-group">
          <label for="bloodgrp">Blood Group:</label>
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
        <label for="city">City:</label>
        <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" autofocus required>
      </div>

      <button type="submit" class="btn btn-primary" style="background-color:red">Check Donars</button>
        </form>

</div>
  <div class="col-sm-3"></div>
</div>

<?php
require 'footer.inc.php';
?>
