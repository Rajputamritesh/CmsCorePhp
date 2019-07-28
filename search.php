<?php include "includes/header.php";

?>
<div class="row">
<div class="col l9 m9 s12">
<?php 
if (isset($_GET['submit']))
{
$str=$_GET['search'];
$str=mysqli_real_escape_string($conn,$str);
$str=htmlentities($str);
$quer=mysqli_query($conn,"select * from posts where title like '$str' or content like '$str' or title like '%$str%' 
or content like '%$str%' order by rand()");
if(mysqli_num_rows($quer))
{
        while($fet=mysqli_fetch_assoc($quer))
        {
?>

<div class="col l3 m4 s6" style="width:150px;margin:5px;">
<div class="card">

<div class="card-image">
<img src="img/<?php echo $fet['image']?>" style="height:100px;width:130px" alt="">
<span class="card-title black-text truncate"><?php
echo $fet['title'];
?></span><!--truncate helps you to smaller the title-->
</div>
<div class="card-content truncate" style="height:150px">
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
 } }}
?>


</div>

<div class="col l3 m3 s12">

<?php
include "includes/sidebar.php";

?>
</div>



</div>

