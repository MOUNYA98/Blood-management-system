
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
        <div class="col-sm-6" style="color:red">
      <form action="updatepwdser.php" method="post" ><!--class cointainer is used to shrink the elements
        clss cointainer-fluid is used to stretch the eleents-->
        <h2>Update Password</h2>
      <div>
        <label for="pwd"> Current Password:</label>
        <input type="password" name="pwd1" class="form-control" id="pwd" placeholder="Enter Password" autofocus required> <!--div tg is used to create classes-->
      </div>
      <div>
        <label for="pwd"> New Password:</label>
        <input type="password" name="pwd2" class="form-control" id="pwd" placeholder="Enter Password" autofocus required> <!--div tg is used to create classes-->
      </div>

      <button type="submit" class="btn btn-primary" style="background-color:red">Submit</button>
        </form>

</div>
  <div class="col-sm-3"></div>
</div>

<?php
require 'footer.inc.php';
?>
