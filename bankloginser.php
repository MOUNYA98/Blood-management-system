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
require 'header.inc.php';
 ?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{

  if(isset($_POST['email']) && !empty($_POST['email'])&&isset($_POST['pwd']) && !empty($_POST['pwd']))
  {

  $email=$_POST['email'];
  $pass=$_POST['pwd'];
  $md5pwd=md5($pass);

  $sqt="SELECT * FROM bloodbank WHERE uname = '$email' AND pwd ='$md5pwd';";

  $query = mysqli_query($conn, $sqt);
  $row = mysqli_num_rows($query);



  if($row==1)
  {
    $sql2="select * from bloodbank where uname='$email';";
    $query2=mysqli_query($conn,$sql2);
    $row2=mysqli_num_rows($query2);
    if($row2==1)
    {

      while($fetch=mysqli_fetch_assoc($query2))
      {
        $id=$fetch['b_id'];
      }
    }
    $_SESSION['id']=$id;
    header('location: bankhome1.php',true);
  }
  else {
    echo "Invalid email or password";
  }
  mysqli_close($conn);
  }


  else {
    echo "Please enter a  name";
    echo $_POST['email'];
    echo $_POST['pwd'];
  }
}




 ?>
 <?php
 require 'footer.inc.php';
?>
