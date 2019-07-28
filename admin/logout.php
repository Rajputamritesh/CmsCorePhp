<?php include "include/head.php"?>
<?php 
if( isset($_SESSION['username']))
{
    unset($_SESSION['username']);
    session_destroy();
   $_SESSION['message']=" <div class='chip red black-text ' >login  to continue</div><?";

    header("Location:login.php");
}
else{
   header("Location:login.php");
}


?>