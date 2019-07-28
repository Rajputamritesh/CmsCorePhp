<?php 
include "includes/header.php";
?>
<!--main conetent-->
<div class="row">
<?php
if(isset($_GET['id']))
{
    $idee=$_GET['id'];
    $idee=mysqli_real_escape_string($conn,$idee);
    $idee=htmlentities($idee);
    
    $quer=mysqli_query($conn,"select * from posts where id=$idee");
    
    if(mysqli_num_rows($quer)>0)
    {
        $fet=mysqli_fetch_assoc($quer);
            $click=$fet['click'];
            $click=$click+1;
           $quer=mysqli_query($conn,"update posts set click='$click' where id=$idee");

        ?>

<div class="col l9 m9 s12">
<div class="card">

<div class="card-image">
<img src="img/<?php echo $fet['image']?>" style="height:400px;width400px" alt="">
<span class="card-title black-text truncate"><?php
echo $fet['title'];
?></span><!--truncate helps you to smaller the title-->
</div>
<div class="card-content">
<?php
echo $fet['content'];
?>   
</div>
<!--add comments-->
<div class="form" style="padding:50px">
<h5 style="margin-left:50px">Add Comment</h5>
<?php
if(isset($_SESSION['message']))
{
    echo $_SESSION['message'];
    unset($_SESSION['message']);

}
?>
<form action="comment.php?id=<?php echo $idee?>" method="POST">


<input type="email" placeholder="Enter email" name="email">

<input type="text" placeholder="Add comment" name="comment">
<div class="center">
<input class="btn teal" name="addcomment" value="ADD" type="submit">
</div>
</form>
</div>

<!--Read comments-->

<div class="card" style="padding:50px">
<ul class="collection with-header">
<li class="collection-header teal white-text"><h5>Recent Comments</h5></li>
<?php 
$quer2=mysqli_query($conn,"select * from comments where posts_id=$idee order by id desc");
while($fets=mysqli_fetch_assoc($quer2))
{
?>
<li class="collection-item">
<br>
<?php echo $fets['comment'];?> <span class="secondary-content"><?php echo $fets['email'];?></span>

</li>
<?php
}
?>


</ul>
</div>

      <?php  
    }
    else{

        header("location:index.php");
    }

   
}
else{

    header("location:index.php");
}


?>

</div>


<?php


$quer=mysqli_query($conn,"select * from posts order by rand() limit 5");   //will randomly fetch 5 data
if(mysqli_num_rows($quer)>0)
{
while($fet=mysqli_fetch_assoc($quer))
{ 

?>                                  <!--jab screen large ho to 9 medium ho toh bhi 9 small ho toh 12-->
<div class="col l3 m4 s6" style="width:150px;margin:5px;">
<div class="card">

<div class="card-image">
<img src="img/<?php echo $fet['image']?>" style="height:100px;width:130px" alt="">
<span class="card-title black-text truncate"><?php
echo $fet['title'];
?></span><!--truncate helps you to smaller the title-->
</div>
<div class="card-content truncate" style="height:150px"><!--truncate class to hide overflowing cntent in the card-->
<?php
echo $fet['content'];
?>    
</div>
<div class="card-action teal center">
<a href="post.php?id=<?php echo $fet['id']?>" class="white-text">Read More</a>
</div>
</div>
</div>
<?php 
}
}
?>
</div>

<div class="col l3 m3 s12">
<?php 
include "includes/sidebar.php";
?>
</div>
<div class="col l12 m12 s12">
<?php 
include "includes/footer.php";
?>
</div>
</div>