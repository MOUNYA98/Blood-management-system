<?php
require 'core.inc.php';
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
require 'header.inc.php' ?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['email']) && !empty($_POST['email'])&&isset($_POST['bloodgrp']) && !empty($_POST['bloodgrp'])&&isset($_POST['uname'])&&!empty($_POST['uname'])
  &&isset($_POST['ph']) && !empty($_POST['ph'])
  &&isset($_POST['city']) && !empty($_POST['city'])&&isset($_POST['gender']) && !empty($_POST['gender'])&& isset($_POST['coun']) && !empty($_POST['coun'])
  &&isset($_POST['state']) && !empty($_POST['state']))
  {
  $name=strtoupper($_POST['uname']);
  $ph=$_POST['ph'];
  $gender=$_POST['gender'];
  $city=strtoupper($_POST['city']);
  $state=strtoupper($_POST['state']);
  $country=strtoupper($_POST['coun']);
  $email=$_POST['email'];
  $bd=$_POST['bloodgrp'];
  $town=strtoupper($_POST['town']);


  $sqt="INSERT INTO request values(NULL,'$name','$email','$gender','$ph','$bd','$town','$city','$state','$country');";


  $query = mysqli_query($conn, $sqt);
  if($query){
  header('location: thanku.php',true);
}
else{
  echo "Not inserted".mysql_query($query);
}

  mysqli_close($conn);
  }



  else {
    echo "Please enter a  name";
  }
}



 ?>
 <?php

 require 'footer.inc.php' ?>
