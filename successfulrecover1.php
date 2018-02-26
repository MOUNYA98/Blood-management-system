<?php
require 'core.inc.php';
?>
<?php
require 'header.inc.php';
?>
<?php
require 'nav.inc.php';
?>
<?php
$hostname="localhost";
$username="root";
$pwd="";
$db="rdbms";
$conn=mysqli_connect($hostname,$username,$pwd,$db);
if(!$conn)
{
  die("error:".mysqli_error());
}
 ?>
<?php
require 'header.inc.php';
 ?>
<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['ph']) && !empty($_POST['ph'])&&isset($_POST['password']) && !empty($_POST['password']))
  {

  $email=$_POST['ph'];
  $pw=$_POST['password'];
  $md5pwd=md5($pw);
  $sqt1="select * from bloodbank where phone='$email';";
  $query1 = mysqli_query($conn, $sqt1);

  $row=mysqli_num_rows($query1);

  if($row==1){
    $sqt="Update bloodbank set pwd='$md5pwd' where phone='$email';";
    $query = mysqli_query($conn, $sqt);
    ?>
    <center>
      <div class="jumbotron" style="margin-bottom:365px;margin-to:300px;background-color:white">
      <center>  <h2 style="color:red"> Password updated successfully <h2>
        <form action="banklogin.php" method="post" >
      <button type="submit" class="btn btn-primary" style="background-color:red">Login</button>
    </form>
    <center>
      </div></center>
    </center>
  </center>

  <?php

}
else{
  echo "Please enter a valid phone number";
}
  mysqli_close($conn);
  }


  else {
    echo "Please enter a  name";
  }
}




 ?>
 <?php
 require 'footer.inc.php';
 ?>
