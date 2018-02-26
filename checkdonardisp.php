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
  if(isset($_POST['bloodgrp']) && !empty($_POST['bloodgrp'])&&isset($_POST['city']) && !empty($_POST['city']))
  {

  $bloodgrp=$_POST['bloodgrp'];
  $city=strtoupper($_POST['city']);

  $sqt="SELECT * FROM donarlogin WHERE bloodgrp = '$bloodgrp' AND city ='$city' order by regdate DESC;";

  $query = mysqli_query($conn, $sqt);
  $row = mysqli_num_rows($query);?>
  <div class="col-sm-offset-4" >
  <table class="table table-striped table-bordered" style="width:50%;margin-top:100px">
  <tr style="color:red">
    <th>Name</th>
    <th>Email ID</th>
    <th>Phone number</th>
    <th>Blood group</th>
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
    $row=$row-1;


  ?>

  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $email; ?></td>
    <td><?php echo $ph; ?></td>
      <td><?php echo $bg; ?></td>
        <td><?php echo $cit; ?></td>
  </tr>
<?php }
 }?>
</table>
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
