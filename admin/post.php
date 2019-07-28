<?php include "include/head.php"
?>
<?php include "include/navbar.php"
?>
<?php
if(isset($_SESSION['username']))
{?>
<div class="main">
<div class="row">
<div class="col l12 m12 s12">
<ul class="collection with-header">
<li class="collection-header teal white-text"><h5>Recent Posts</h5></li>
<?php $que=mysqli_query($conn,"select * from posts order by id DESC");
if(mysqli_num_rows($que)>0)
{
while($row=mysqli_fetch_assoc($que))
{
     
?>
<li class="collection-item">
<a href=""><?php echo $row['title']?> </a><br>
<span><a href="edit.php?id=<?php echo $row['id']?>"><i class="material-icons tiny">edit</i>Edit</a>|<a href="delete.php?id=<?php echo $row['id']?>"><i class="material-icons tiny red-text">clear</i>delete</a>|<a href=""><i class="material-icons tiny green-text">share</i>Share</a></span>
</li>
<?php 
}}?>
</ul>
<?php
}
else{
    $_SESSION['message']=" <div class='chip red black-text ' >login  to continue</div><?";

    header("Location:login.php");
}
?>