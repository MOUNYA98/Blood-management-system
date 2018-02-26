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
?>
<?php


  $sqt="SELECT * FROM request order by r_id desc;";

  $query = mysqli_query($conn, $sqt);
  $row = mysqli_num_rows($query);?>

  <div class="col-sm-offset-4" style="width:50%;margin-top:100px" >
    <h2 style="color:red"> Requests for blood </h2>
  <table class="table table-striped table-bordered">
  <tr style="color:red">

    <th>Name</th>
    <th>Email ID</th>
    <th>Phone number</th>
    <th>Blood group</th>
    <th>Location</th>
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
    $bg=$fetch['bloodgrp'];
    $cit=$fetch['city'];
    $town=$fetch['town'];
    $row=$row-1;


  ?>

  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $ph; ?></td>
      <td><?php echo $bg; ?></td>
      <td><?php echo $town; ?></td>
        <td><?php echo $cit; ?></td>
  </tr>
<?php }
 }?>
</table>
<?php






 ?>
 <?php
 require 'footer.inc.php';
?>
