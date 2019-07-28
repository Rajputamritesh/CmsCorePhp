<?php include "include/head.php";?>
<?php
if(isset($_SESSION['username']))

{

?>
<body>
<?php include "include/navbar.php"?>
<div class="main">
<div class="row">
<div class="col l6 m6 s12">
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
<?php }}?>
</ul>



</div>
<div class="col l6 m6 s12">
<ul class="collection with-header">
<li class="collection-header teal white-text"><h5>Recent Comments</h5></li>
<li class="collection-item">
<a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, distinctio?</a><br>
<span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a>|<a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
</li>
<li class="collection-item">
<a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, distinctio?</a><br>
<span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a>|<a href=""><i class="material-icons tiny  red-text">clear</i>Remove</a></span>
</li>
<li class="collection-item">
<a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, distinctio?</a><br>
<span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a>|<a href=""><i class="material-icons tiny  red-text">clear</i>Remove</a></span>
</li>
<li class="collection-item">
<a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, distinctio?</a><br>
<span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a>|<a href=""><i class="material-icons tiny  red-text">clear</i>Remove</a></span>
</li>
<li class="collection-item">
<a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, distinctio?</a><br>
<span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a>|<a href=""><i class="material-icons tiny  red-text">clear</i>Remove</a></span>
</li>

</ul>



</div>
</div>
<div class="fixed-action-btn"><a href="write.php" class="btn-floating btn btn-large pulse  "><i class="material-icons">edit</a></div>
</div>

</body>
<?php 
}
else{
      $_SESSION['message']=" <div class='chip red black-text ' >login  to continue</div><?";

      header("location:login.php");
 }  
?>