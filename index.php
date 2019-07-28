<?php 
include "includes/header.php";
?>

<div class="row">
<!-- main bar-->

<div class="col l9 m9 s12"> 
<?php


$quer=mysqli_query($conn,"select * from posts order by id DESC");
if(mysqli_num_rows($quer)>0)
{
while($fet=mysqli_fetch_assoc($quer))
{ 

?>                                  <!--jab screen large ho to 9 medium ho toh bhi 9 small ho toh 12-->
<div class="col l3 m4 s6">

<div class="card" style="width:150px">

<div class="card-image" style="height:100px;width:150px">
<img src="img/<?php echo $fet['image']?>" style="height:100px;width:150px" alt="">
<span class="card-title black-text truncate"><?php
echo $fet['title'];
?></span><!--truncate helps you to smaller the title-->
</div>
<div class="card-content" style="height:150px">
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
<!--side bar -->

<div class="col l3 m3 s12"><!-- large ko 3 medium ko3 aur small ko 12-->
<?php 
include "includes/sidebar.php";
?>
</div>

</div>