
<?php
require 'core.inc.php';
if(islogin())
{
    header('location: bankhome1.php',true);
}
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
      <form action="bankloginser.php" method="post" ><!--class cointainer is used to shrink the elements
        clss cointainer-fluid is used to stretch the eleents-->
        <h2>Organisation Login</h2>
      <div class="form-group">
        <label for="email">UserName:</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Enter user name" autofocus required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter Password" autofocus required> <!--div tg is used to create classes-->
      </div>
      <a href="recoverpassword.php">Forgot Password?</a>
      <br>
      <a href="banksignup.php">Not yet Registered?</a>
      <br>
      <button type="submit" class="btn btn-primary" style="background-color:red">Submit</button>
        </form>

</div>
  <div class="col-sm-3"></div>
</div>

<?php
require 'footer.inc.php';
?>
