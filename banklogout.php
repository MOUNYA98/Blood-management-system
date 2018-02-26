<?php
require 'core.inc.php';
?>
<?php
session_unset();
session_destroy();


?>
<?php
require 'header.inc.php';
 ?>
 <?php
 require 'nav.inc.php';
 ?>

 <center>
   <div class="jumbotron" style="margin-bottom:365px;margin-to:300px;background-color:white">
   <center>  <h2 style="color:red"> Your are successfully logged out<h2>
     <a href="banklogin.php">login again?</a><center>
   </div></center>

 </center>
 </center>



<?php
 require 'footer.inc.php';
  ?>
