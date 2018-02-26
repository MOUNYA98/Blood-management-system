<?php
/*getname($id)
inlogi()
recoverPassword($email)
recoverPassword($phone)
*/
session_start();
function getDetails($att)
{
  $email=$_SESSION['email'];
  $sql="select $att from bloodbank where email='$email';";
  $query=mysqli_query($GLOBALS['conn'],$sql);
  if(mysqli_num_rows($query)==1)
  {
    $row=mysqli_fetch_assoc($query);
    return $row[$att];
  }
  else {
    return false;
  }
}

function islogin()
{
  if(isset($_SESSION['id']) && !empty($_SESSION['id']))
  {
    return true;
  }
  else {
    session_unset();
    return false;
  }

}
function recoverPassword($email)
{

}
?>
