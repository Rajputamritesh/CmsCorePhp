<?php include "include/head.php"?>
<?php
if(isset($_POST['publish']))
{
    $idee=$_GET['id'];
    $idee=mysqli_real_escape_string($conn,$idee);
    $idee=htmlentities($idee);
    
    $data=$_POST['ckeditor'];
    $title=$_POST['title'];
    $title=mysqli_real_escape_string($conn,$title);
    $title=htmlentities($title);
    $data=mysqli_real_escape_string($conn,$data);
    $data=htmlentities($data);
    $quer=mysqli_query($conn,"update posts set title='$title',content='$data' where id='$idee' ");

    $_SESSION['message']=" <div class='chip green black-text ' >Post updated</div><?";
    header("location:edit.php?id=$idee");

}
else{

    $_SESSION['message']=" <div class='chip red black-text ' >Try again</div><?";
    header("location:edit.php?id=$idee");
}
?>