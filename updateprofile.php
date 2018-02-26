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
$id=$_SESSION['id'];
$sql1="select * from bloodbank where b_id='$id';";
$query1=mysqli_query($conn,$sql1);
$row1=mysqli_num_rows($query1);
if($row1==1)
{
  while($fetch=mysqli_fetch_assoc($query1))
  {
    $email=$fetch['email'];
    $name=$fetch['name'];
    $uname=$fetch['uname'];
    $ph=$fetch['phone'];
    $loc=$fetch['location'];
    $city=$fetch['city'];
    $state=$fetch['state'];
  }
}
 ?>
 <div class="container" style="color:red">
   <div class="col-sm-3"></div>
   <div class="col-sm-6">
 <form action="updateprofileser.php" method="post" ><!--class cointainer is used to shrink the elements
   clss cointainer-fluid is used to stretch the eleents-->
   <h2 style="color:red">Update details</h2>
   <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" name="name" class="form-control" id="name" value='<?php echo $name ?>' autofocus required>
   </div>
 <div class="form-group">
   <label for="name">UserName:</label>
   <input type="text" name="uname" class="form-control" id="uname" value="<?php echo $uname ?>" autofocus required>
 </div>


 <div class="form-group">
   <label for="email">Email address:</label>
   <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ?>" autofocus required>
 <div class="form-group">
   <label for="ph">Phone number:</label>
   <input type="number" name="ph" class="form-control" id="ph" value="<?php echo $ph ?>" autofocus required>
 </div>
 <div class="form-group">
   <label for="location">Enter Location:</label>
   <input type="text" name="location" class="form-control" id="location" value="<?php echo $loc ?>" autofocus required>
 </div>
 <div class="form-group">
   <label for="city">Enter City:</label>
   <input type="text" name="city" class="form-control" id="city" value="<?php echo $city ?>" autofocus required>
 </div>
 <div class="form-group">
   <label for="state">Enter State:</label>
   <input type="text" name="state" class="form-control" id="state" value="<?php echo $state ?>" autofocus required>
 </div>


 <button type="submit" class="btn btn-primary" style="color:red">Submit</button>
   </form>
