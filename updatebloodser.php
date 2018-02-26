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
if($_SERVER['REQUEST_METHOD']=="POST")
{
  if(isset($_POST['ap'])&&isset($_POST['an']) &&isset($_POST['bp']) &&isset($_POST['bn']) &&isset($_POST['abp'])&&isset($_POST['on'])&&isset($_POST['abn']) &&isset($_POST['on']) &&isset($_POST['op']) )
  {

$id=$_SESSION['id'];

$ap=$_POST['ap'];

$an=$_POST['an'];
$bp=$_POST['bp'];
$bn=$_POST['bn'];
$op=$_POST['op'];
$on=$_POST['on'];
$abp=$_POST['abp'];
$abn=$_POST['abn'];

  $sqt="UPDATE blood SET Apos='$ap',Aneg='$an',Bpos='$bp',Bneg='$bn',Opos='$op',Oneg='$on',ABpos='$abp',ABneg='$abn' where b_id='$id';";


  $query = mysqli_query($conn, $sqt);
  if($query){
  header('location: thanku3.php',true);
}
else{
  echo "Not inserted".mysql_query($query);
}

  mysqli_close($conn);
  }


  else {

    echo 'Not inserted xyz';

  }
}




 ?>
 <?php

 require 'footer.inc.php' ?>
