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
require 'core.inc.php';
?>
<?php
require 'header.inc.php';
?>
<?php
require 'nav.inc.php';

if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['bloodgrp']) && !empty($_POST['bloodgrp'])&&isset($_POST['city']) && !empty($_POST['city'])&&isset($_POST['town']) && !empty($_POST['town']))
  {

  $bloodgrp=$_POST['bloodgrp'];
  $city=strtoupper($_POST['city']);
  $town=strtoupper($_POST['town']);
  if($bloodgrp=='A+')
  {
    $bp='Apos';
  }
  elseif ($bloodgrp=='A-') {
    $bp='Aneg';
  }
  elseif($bloodgrp=='B+')
  {
    $bp='Bpos';
  }
  elseif ($bloodgrp=='B-') {
    $bp='Bneg';
  }
  elseif($bloodgrp=='AB+')
  {
    $bp='ABpos';
  }
  elseif ($bloodgrp=='AB-') {
    $bp='ABneg';
  }
  elseif($bloodgrp=='O+')
  {
    $bp='Opos';
  }
  elseif ($bloodgrp=='O-') {
    $bp='Oneg';
  }

  $sqt="SELECT * FROM bloodbank Natural join blood WHERE $bp!=0 AND city ='$city'AND location='$town';";

  $query = mysqli_query($conn, $sqt);
  $row = mysqli_num_rows($query);?>

  <div class="col-sm-offset-4" >
  <table class="table table-striped table-bordered" style="width:50%;margin-top:100px">
  <tr style="color:red">
    <th>Name</th>
    <th>Email ID</th>
    <th>Phone number</th>

    <th>City</th>
  </tr>

<?php
  while($row>0)
  {
    while($fetch=mysqli_fetch_assoc($query))
    {
    $name=$fetch['name'];
    $email=$fetch['email'];
    $ph=$fetch['phone'];

    $cit=$fetch['city'];
    $row=$row-1;


  ?>

  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $ph; ?></td>

        <td><?php echo $cit; ?></td>
  </tr>
<?php }
 }?>
</table>
</div>
<?php

}

  else {
    echo "Please enter a  name";
  }
}




 ?>
 <?php
 require 'footer.inc.php';
?>
