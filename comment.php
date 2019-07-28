<?php include "includes/header.php"?>
<?php
if(isset($_POST['addcomment']))
{
    $i= $_GET['id'];
    $com=$_POST['comment'];
    $email=$_POST['email'];
    $i=mysqli_real_escape_string($conn,$i);
   $com=mysqli_real_escape_string($conn,$com);        
    $email=mysqli_real_escape_string($conn,$email);

    
    $com=htmlentities($com);
    $i=htmlentities($i);
    $email=htmlentities($email);
        $quer=mysqli_query($conn,"insert into comments(posts_id,email,comment) values('$i','$email','$com')");
       
        $_SESSION['message']=" <div class='chip green black-text ' >Comment added </div><?";
        header("location:post.php?id=$i");
}
?>