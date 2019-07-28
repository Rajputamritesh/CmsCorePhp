<?php include "include/head.php"?>
<?php 
 
 if(isset($_GET['id']))
 {
 $idee=$_GET['id'];
 $idee=mysqli_real_escape_string($conn,$idee);
 $idee=htmlentities($idee);
 $quer=mysqli_query($conn,"DELETE from posts where id=$idee");

 $_SESSION['message']=" <div class='chip green black-text ' >Post updated</div><?";
 header("location:post.php");

 }


?>