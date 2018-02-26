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
  if(isset($_POST['pwd1']) && !empty($_POST['pwd1'])&&isset($_POST['pwd2']) && !empty($_POST['pwd2']))
  {
    $pwd1=$_POST['pwd1'];
    $pwd2=$_POST['pwd2'];
    $email=$_SESSION['email'];
    $sql1="select * from bloodbank where email='$email';";
    $query1=mysqli_query($conn,$sql1);
    $row1=mysqli_num_rows($query1);
    if($row1==1)
    {
      while($fetch=mysqli_fetch_assoc($query1))
      {
        $pass=$fetch['pwd'];

      }
    }
    $md5pwd1=md5($pwd1);
    $s=strcmp($md5pwd1,$pass);
if($s==0)
{
  $md5pwd2=md5($pwd2);
  $sqt="UPDATE bloodbank SET pwd='$md5pwd2'where email='$email';";
  $query = mysqli_query($conn, $sqt);
  if($query){
  header('location: successful1.php',true);
}
else{
  echo "Not inserted".mysql_query($query);
}

  mysqli_close($conn);
  }


}
  else {

    echo 'not inserted';

  }
}




 ?>
 <?php

 require 'footer.inc.php' ?>
