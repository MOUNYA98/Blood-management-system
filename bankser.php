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
  if(isset($_POST['email']) && !empty($_POST['email'])&&isset($_POST['name']) && !empty($_POST['name'])&&isset($_POST['uname']) && !empty($_POST['uname'])&&isset($_POST['ph']) && !empty($_POST['ph'])
  &&isset($_POST['city']) && !empty($_POST['city'])&&isset($_POST['location']) && !empty($_POST['location'])&& isset($_POST['pwd']) && !empty($_POST['pwd'])&& isset($_POST['coun']) && !empty($_POST['coun'])
  &&isset($_POST['state']) && !empty($_POST['state']))
  {
  $name=strtoupper($_POST['name']);
  $uname=$_POST['uname'];
  $ph=$_POST['ph'];
  $loc=strtoupper($_POST['location']);
  $city=strtoupper($_POST['city']);
  $state=strtoupper($_POST['state']);
  $country=strtoupper($_POST['coun']);
  $email=$_POST['email'];
  $pass=$_POST['pwd'];
  $md5pwd=md5($pass);
  $sql1="select * from bloodbank where email='$email';";
  $query1=mysqli_query($conn,$sql1);
  $row1=mysqli_num_rows($query1);
  $sql2="select * from bloodbank where phone='$ph';";
  $query2=mysqli_query($conn,$sql2);
  $row2=mysqli_num_rows($query2);
  $sql3="select * from bloodbank where uname='$uname';";
  $query3=mysqli_query($conn,$sql3);
  $row3=mysqli_num_rows($query3);
  echo $row3."<br>";
  if($row1>=1 || $row2>=1 || $row3>=1)
  {
    ?>
    <div class="container" style="color:red">
      <div class="col-sm-3"></div>
      <div class="col-sm-6" style="margin-top:100px">
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
      <label for="pwd">Create Password:</label>
      <input type="password" name="pwd" class="form-control" id="email" placeholder="Choose a password" autofocus required>
    </div>
    <div class="form-group">
      <label for="ph">Phone number:</label>
      <input type="number" name="ph" class="form-control" id="ph" value="<?php echo $ph ?>" autofocus required><?php if($row2>=1) echo "<span style=\"color:red;\" >*</span> PhoneNumber already in use";?>
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
    <div class="form-group">
      <label for="coun">Enter country:</label>
      <input type="text" name="coun" class="form-control" id="coun" value="<?php echo $country ?>" autofocus required>
    </div>

    <button type="submit" class="btn btn-primary" style="color:red">Submit</button>
      </form>
      <?php
  }
  else {


  $sqt="INSERT INTO bloodbank values(NULL,'$email','$name','$uname','$md5pwd','$loc','$city','$state','$country','$ph');";



  $query = mysqli_query($conn, $sqt);
  $sql2="select * from bloodbank where email='$email';";
  $query2=mysqli_query($conn,$sql2);
  $row2=mysqli_num_rows($query2);
  if($row2==1)
  {
    while($fetch=mysqli_fetch_assoc($query2))
    {
      $id=$fetch['b_id'];
      $_SESSION['id']=$id;
    
    }
  }
  $mysql1="INSERT INTO blood values('$id',0,0,0,0,0,0,0,0);";
  $query2=mysqli_query($conn,$mysql1);
  if($query && $query2){
  header('location: bankhome1.php',true);
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
