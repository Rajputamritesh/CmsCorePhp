<?php include "include/head.php";
include "include/navbar.php";
?>
<div class="row main" >
<div class="card-panel " >
<h5>Change Password<h5>
<div class="card "style="border-radius:10px;padding:10px">
<?php
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<form  action="settings.php"   method="POST">

<input type="password" name="password" placeholder="enter new password">

<input type="password" name="con_password" placeholder="enter password again">

<div class="center"><input type="submit" value="okay" name="pass" class="btn teal pulse"></div>
</form>
</div>
</div >
</div>
<?php
if(isset($_POST['pass']))
{
    $p1=$_POST['password'];
    $p2=$_POST['con_password'];
    $p1=htmlentities($p1);
    $p2=htmlentities($p2);
    $p1=mysqli_real_escape_string($conn,$p1);
    $p1=mysqli_real_escape_string($conn,$p1);
    $password=password_hash($password,PASSWORD_BCRYPT);
    
    
    if($p1==$p2)
    {
        $use=$_SESSION['username'];
        $p1=password_hash($p1,PASSWORD_BCRYPT);
        mysqli_query($conn,"update users set password='$p1' where username='$use' ");
        $_SESSION['message']=" <div class='chip green black-text ' >password changed</div><?";
        header("location:settings.php");


    }
    else{
        $_SESSION['message']=" <div class='chip red black-text ' >password not matched</div><?";
        header("location:settings.php");
    }
}






?>