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
require 'nav.inc.php';
?>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['email']) && !empty($_POST['email'])&&isset($_POST['name']) && !empty($_POST['name'])&&isset($_POST['uname']) && !empty($_POST['uname'])&&isset($_POST['ph']) && !empty($_POST['ph'])
  &&isset($_POST['city']) && !empty($_POST['city'])&&isset($_POST['location']) && !empty($_POST['location'])&&isset($_POST['state']) && !empty($_POST['state']))
  {
  $name=strtoupper($_POST['name']);
  $uname=strtoupper($_POST['uname']);
  $ph=$_POST['ph'];
  $loc=strtoupper($_POST['location']);
  $city=strtoupper($_POST['city']);
  $state=strtoupper($_POST['state']);
  $email=$_POST['email'];
  $id=$_SESSION['id'];
  $sql1="select * from bloodbank where email='$email'and not b_id='$id';";
  $query1=mysqli_query($conn,$sql1);
  $row1=mysqli_num_rows($query1);
  $sql2="select * from bloodbank where phone='$ph' and not b_id='$id';";
  $query2=mysqli_query($conn,$sql2);
  $row2=mysqli_num_rows($query2);
  $sql3="select * from bloodbank where uname='$uname' and not b_id='$id';";
  $query3=mysqli_query($conn,$sql3);
  $row3=mysqli_num_rows($query3);


  if($row1>=1 || $row2>=1 || $row3>=1)
  {
    ?>
    <div class="container" style="color:red">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
    <form action="bankser.php" method="post" ><!--class cointainer is used to shrink the elements
      clss cointainer-fluid is used to stretch the eleents-->
      <h2 style="color:red">Join as a Blood Donar</h2>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" id="name" value='<?php echo $name ?>' autofocus required>
      </div>
    <div class="form-group">
      <label for="name">UserName:</label>
      <input type="text" name="uname" class="form-control" id="uname" value="<?php echo $uname ?>" autofocus required><?php if($row3>=1) echo "<span style=\"color:red;\" >*</span> Username already in use";?>
    </div>


    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ?>" autofocus required><?php if($row1>=1) echo "<span style=\"color:red;\" >*</span> Email already in use";?>
    </div>
    <div class="form-group">
      <label for="ph">Phone number:</label>
      <input type="number" name="ph" class="form-control" id="ph" value="<?php echo $ph ?>" autofocus required><?php if($row2>=1) echo "<span style=\"color:red;\" >*</span> PhoneNumber already in use";?>
    </div>
    <div class="form-group">
      <label for="location">Enter Location:</label>
      <input type="text" name="location" class="form-control" id="location" value="<?php echo $ph ?>" autofocus required>
    </div>
    <div class="form-group">
      <label for="city">Enter City:</label>
      <input type="text" name="city" class="form-control" id="city" value="<?php echo $city ?>" autofocus required>
    </div>
    <div class="form-group">
      <label for="state">Enter State:</label>
      <input type="text" name="state" class="form-control" id="state" value="<?php echo $state ?>" autofocus required>
    </div>
    <div class="form-group">
      <label for="coun">Enter country:</label>
      <input type="text" name="coun" class="form-control" id="coun" value="<?php echo $country ?>" autofocus required>
    </div>

    <button type="submit" class="btn btn-primary" style="color:red">Submit</button>
      </form>
      <?php
  }
  else {
$id=$_SESSION['id'];

  $sqt="UPDATE bloodbank SET email='$email',name='$name',uname='$uname',phone='$ph',location='$loc',city='$city',state='$state' where b_id=$id;";
  $_SESSION['email']=$email;

  $query = mysqli_query($conn, $sqt);
  if($query){
  header('location: successful.php',true);
}
else{
  echo "Not inserted".mysql_query($query);
}

  mysqli_close($conn);
  }
}


  else {

    echo $name;
    echo $uname;
    echo $email;
    echo $pass;
    echo $ph;
    echo $loc;
    echo $city;
    echo $coun;
    echo $state;
  }
}




 ?>
 <?php

 require 'footer.inc.php' ?>
