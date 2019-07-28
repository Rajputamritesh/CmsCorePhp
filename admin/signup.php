<?php
include "include/head.php";


if(isset($_POST['signup']))
{
  $username=$_POST['username'];//name se uthta h ye 
  $email=$_POST['email'];
  $password=$_POST['password'];
            //now to prevent from attackers realescape used to prevent sqlinjection it is injecting sql command
   $username=mysqli_real_escape_string($conn,$username);
   $email=mysqli_real_escape_string($conn,$email);
   $password=mysqli_real_escape_string($conn,$password);        
//to prevent from javascript injection or cross-side-scripting
$username=htmlentities($username);
$email=htmlentities($email);
$password=htmlentities($password);
$password=password_hash($password,PASSWORD_BCRYPT);
echo  $username,$email,$password;    
$quer2=mysqli_query($conn,"select username from users ");
$flag=1;
while($fet=mysqli_fetch_assoc($quer2))
{

echo $fet['username'];
if($username==$fet['username'])
{
  $_SESSION['message']=" <div class='chip red black-text ' >username already exsist</div><?";
  header("location:login.php");
  
  $flag=0;

}

}
if($flag==1){
$quer=mysqli_query($conn,"insert into users(username,email,password) values ('$username','$email','$password') ");

if($quer)
{
  $_SESSION['message']="<div class='chip green black-text'>You have successfully registered
</div>";
header("Location:login.php");

}
else{
  header("Location:login.php");
$_SESSION['message']="<div class='chip red black-text'>something went wrong try again</div>";
}
}
}
?>