<?php
include "includes/dbh.php";?>

<form action="search.php" method="GET" >
<ul class="collection"><!--yahan pr collection feilds ka hai toh ul lengay-->
<li class="collection-item">

<h5>Search</h5>
<div class="input-field">
<input type="text" id="search" name="search" placeholder="Search Anything.......">
<div class="center">
<input type="submit" class="btn" value="Search" name="submit">

</div>
</div>
</li>
</ul>
</form>
<div class="collection with-header teal lighten-2"><!--yahan pr collection links ka hai so div lengay and a tag use karengay-->
<h5 style="padding-left:20px" class="teal lighten-2">Trending Blogs</h5>

<?php 

$quer=mysqli_query($conn,"select * from posts order by click DESC");
while($fet=mysqli_fetch_assoc($quer))
{
?>

<a href="" class="collection-item grey lighten-3"> <?php echo $fet['content'];?>
 </a>



<?php
}

?></div>