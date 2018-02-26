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
require 'nav.inc.php' ?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['email']) && !empty($_POST['email'])&&isset($_POST['bloodgrp']) && !empty($_POST['bloodgrp'])&&isset($_POST['uname']) && !empty($_POST['uname'])&&isset($_POST['ph']) && !empty($_POST['ph'])
  &&isset($_POST['city']) && !empty($_POST['city'])&&isset($_POST['gender']) && !empty($_POST['gender'])&& isset($_POST['dob']) && !empty($_POST['dob'])&& isset($_POST['coun']) && !empty($_POST['coun'])
  &&isset($_POST['state']) && !empty($_POST['state']))
  {
  $name=strtoupper($_POST['uname']);
  $ph=$_POST['ph'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $city=strtoupper($_POST['city']);
  $state=strtoupper($_POST['state']);
  $country=strtoupper($_POST['coun']);
  $email=$_POST['email'];
  $bd=$_POST['bloodgrp'];
  $sql1="select * from donarlogin where email='$email';";
  $query1=mysqli_query($conn,$sql1);
  $row1=mysqli_num_rows($query1);
  $sql2="select * from donarlogin where phone='$ph';";
  $query2=mysqli_query($conn,$sql2);
  $row2=mysqli_num_rows($query2);
  $sql3="select * from donarlogin where name='$name';";
  $query3=mysqli_query($conn,$sql3);
  $row3=mysqli_num_rows($query3);
  echo $row3."<br>";
  if($row1>=1 || $row2>=1 || $row3>=1)
  {
    ?>
    <div class="container" style="color:red">
      <div class="col-sm-3"></div>
      <div class="col-sm-6" style="margin-top">
    <form action="donarser.php" method="post" ><!--class cointainer is used to shrink the elements
      clss cointainer-fluid is used to stretch the eleents-->
      <h2 style="color:red">Join as a Blood Donar</h2>
    <div class="form-group">
      <label for="name">UserName:</label>
      <input type="text" name="uname" class="form-control" id="name" value="<?php echo $name ?>" autofocus required><?php if($row3>=1) echo "<span style=\"color:red;\" >*</span> Username already in use";?>
    </div>
    <div class="form-group">
      <label for="dob">date of birth:</label>
      <input type="date" name="dob" class="form-control" id="dob" value="<?php echo $dob ?>" autofocus required> <!--div tg is used to create classes-->
    </div>
    <div class="radio" style="color:black">
      <lable for="gender" style="color:red">Gender:</lable><br>
      <?php
      if($gender=='M')
      { ?>
          <label><input type="radio" name="gender" checked>Male</label>
        </div>
        <div class="radio" style="color:black">
          <label><input type="radio" name="gender" >Female</label>
        </div>
        <div class="radio" style="color:black">
          <label><input type="radio" name="gender"  >Others</label>
        </div>
      <?php
      }
      elseif($gender=='F')
      {
        ?>
        <label><input type="radio" name="gender">Male</label>
      </div>
      <div class="radio" style="color:black">
        <label><input type="radio" name="gender" checked>Female</label>
      </div>
      <div class="radio" style="color:black">
        <label><input type="radio" name="gender" >Others</label>
      </div>
      <?php
      }
      elseif($gender=='O')
      {
        ?>
        <label><input type="radio" name="gender" >Male</label>
      </div>
      <div class="radio" style="color:black">
        <label><input type="radio" name="gender" >Female</label>
      </div>
      <div class="radio" style="color:black">
        <label><input type="radio" name="gender" checked >Others</label>
      </div>
    <?php } ?>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" name="email" class="form-control" id="email" value="<?php echo $email ?>" autofocus required><?php if($row1>=1) echo "<span style=\"color:red;\" >*</span> Email already in use";?>
    </div>
    <div class="form-group">
      <label for="bloodgrp">Blood Group:</label>
       <select name="bloodgrp" style="color:black">
         <option value="A+">A+</option>
         <option value="A-">A-</option>
         <option value="B+">B+</option>
         <option value="B-">B-</option>
         <option value="AB+">AB+</option>
         <option value="AB-">AB-</option>
         <option value="O+">O+</option>
         <option value="O-">O-</option>
       </select>

    </div>

    <div class="form-group">
      <label for="ph">Phone number:</label>
      <input type="number" name="ph" class="form-control" id="ph" value="<?php echo $ph ?>" autofocus required><?php if($row2>=1) echo "<span style=\"color:red;\" >*</span> PhoneNumber already in use";?>
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

    <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
  }
  else {

  $dt=date('Y-m-d');

  $sqt="INSERT INTO donarlogin values(NULL,'$name','$email','$ph','$bd','$gender','$city','$state','$country','$dob','$dt');";


  $query = mysqli_query($conn, $sqt);
  if($query){
  header('location: thanku1.php',true);
}
else{
  echo "Not inserted".mysql_query($query);
}

  mysqli_close($conn);
  }
}


  else {
    echo "Please enter a  name";
  }
}




 ?>
 <?php

 require 'footer.inc.php' ?>
