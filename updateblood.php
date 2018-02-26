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

$id=$_SESSION['id'];

$sql1="select * from blood where b_id='$id';";
$query1=mysqli_query($conn,$sql1);
$row1=mysqli_num_rows($query1);
if($row1==1)
{
  while($fetch=mysqli_fetch_assoc($query1))
  {

    $ap=$fetch['Apos'];
    $an=$fetch['Aneg'];
    $bp=$fetch['Bpos'];
    $bn=$fetch['Bneg'];
    $op=$fetch['Opos'];
    $on=$fetch['Oneg'];
    $abp=$fetch['ABpos'];
    $abn=$fetch['ABneg'];
  }
}
 ?>
 <div class="container" style="color:red">
   <div class="col-sm-3"></div>
   <div class="col-sm-6">
 <form action="updatebloodser.php" method="post" ><!--class cointainer is used to shrink the elements
   clss cointainer-fluid is used to stretch the eleents-->
   <h2 style="color:red">Update details</h2>
   <div class="form-group">
     <label for="name">A+:</label>
     <input type="int" name="ap" class="form-control" id="name" value='<?php echo $ap ?>' autofocus required>
   </div>
 <div class="form-group">
   <label for="name">A-:</label>
   <input type="int" name="an" class="form-control" id="uname" value="<?php echo $an ?>" autofocus required>
 </div>
 <div class="form-group">
   <label for="name">B+:</label>
   <input type="int" name="bp" class="form-control" id="name" value='<?php echo $bp ?>' autofocus required>
 </div>
<div class="form-group">
 <label for="name">B-:</label>
 <input type="int" name="bn" class="form-control" id="uname" value="<?php echo $bn ?>" autofocus required>
</div>
<div class="form-group">
  <label for="name">O+:</label>
  <input type="int" name="op" class="form-control" id="name" value='<?php echo $op ?>' autofocus required>
</div>
<div class="form-group">
<label for="name">O-:</label>
<input type="int" name="on" class="form-control" id="uname" value="<?php echo $on ?>" autofocus required>
</div>
<div class="form-group">
  <label for="name">AB+:</label>
  <input type="int" name="abp" class="form-control" id="name" value='<?php echo $abp ?>' autofocus required>
</div>
<div class="form-group">
<label for="name">AB-:</label>
<input type="int" name="abn" class="form-control" id="uname" value="<?php echo $abn ?>" autofocus required>
</div>




 <button type="submit" class="btn btn-primary" style="color:red">Submit</button>
   </form>
