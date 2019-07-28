<?php include "include/head.php"?>
<?php  include "include/navbar.php"?>

<?php
if(isset($_GET['id']))
{
    $ide=$_GET['id'];
    
    $ide=mysqli_real_escape_string($conn,$ide);
    $ide=htmlentities($ide);
    $quer=mysqli_query($conn,"select title,content from posts where id=$ide");
    if(mysqli_num_rows($quer)>0)
    {
    $row=mysqli_fetch_assoc($quer);
     
?>
<body>
<div class="main" style="padding-left:250px">
<form action="edit_check.php?id=<?php echo $ide?>" method="POST" enctype="multipart/form-data">
<?php if(isset($_SESSION['message']))
{
      echo $_SESSION['message'];
      unset($_SESSION['message']);
}
?>
<div class="card-panel">
<h5>Title</h5>
<textarea name="title" class="materialize-textarea"><?php echo $row['title']?></textarea>
<h5>Content</h5>
<textarea name="ckeditor" id="ckeditor"><?php echo $row['content']?></textarea>
<div class="center"><input type="submit" value="Update" name="publish" class="btn teal"></div>
</div>
</form>
</div>
<div class="fixed-action-btn"><a href="" class="btn-floating btn btn-large pulse  "><i class="material-icons">edit</a></div>
</div>


                <script>
                        ClassicEditor
                                .create( document.querySelector( '#ckeditor' ) )
                                .then( ckeditor => {
                                        console.log( ckeditor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
</body>
<?php
}}
else{
    header("location:dashboard.php");

}
?>