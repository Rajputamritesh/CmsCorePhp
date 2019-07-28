<?php 
include "include/head.php";
include "include/navbar.php";
$dir="../img/";
$files=scandir($dir);
//print_r($files);
if($files)
{

?>
<div class="main">
<div class="row">
<?php
foreach($files as $i)
{
    if(strlen($i)>2)//to take only image as strlen of image is greater than 2 while directory strlen is less than 2 so directory is eliminated
    {
  ?>
<div class="col l2 m4 s6">
<div class="card">
<div class="card-image">
<img src="../img/<?php echo $i ?>" style="height:100px;width:150px;margin:2px " alt="">
</div>
</div>
</div>
<?php
    }
}
?>

</div>
</div>
<?php }
?>