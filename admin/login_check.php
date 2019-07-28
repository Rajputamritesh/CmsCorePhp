<?php
include "include/head.php";


if(isset($_POST['login']))
{
  $username=$_POST['usernam'];//name se uthta h ye 
 
  $password=$_POST['passwordlogin'];
            //now to prevent from attackers realescape used to prevent sqlinjection it is injecting sql command
   $username=mysqli_real_escape_string($conn,$username);
   
   $password=mysqli_real_escape_string($conn,$password);        
//to prevent from javascript injection or cross-side-scripting
$username=htmlentities($username);
$password=htmlentities($password);
$quer=mysqli_query($conn,"select password from users where username='$username'");
$pass=mysqli_fetch_assoc($quer);
$passs=$pass['password'];
/* ?><h1><?php echo $pass;?></h1><?php */
if(password_verify($password,$passs))
{
 
    $_SESSION['username']=$username;
    header("location:dashboard.php");
}
        
else{
     $_SESSION['message']=" <div class='chip red black-text ' >wrong credentials</div><?";
   header("location:login.php");
}

}

?>