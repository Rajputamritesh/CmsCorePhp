

<?php include "include/head.php" ?>

<?php include "include/navbar.php"?>
<?php
if(isset($_SESSION['username']))
{?>
<body>
<div class="main" style="padding-left:250px">
<form action="write_check.php" method="POST" enctype="multipart/form-data">
<?php if(isset($_SESSION['message']))
{
      echo $_SESSION['message'];
      unset($_SESSION['message']);
}
?>
<div class="card-panel">
<h5>Title</h5>
<textarea name="title" class="materialize-textarea"></textarea>
<h5>Feature Image</h5>
<div class="input-field file-field">
<div class="btn">
Upload File
<input type="file" name="image">
</div>
<div class="file-path-wrapper">
<input type="text" class="file-path">
</div>
</div>
<h5>Content</h5>
<textarea name="ckeditor" id="ckeditor"></textarea>
<div class="center"><input type="submit" value="Publish" name="publish" class="btn teal"></div>
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
}
else{
    $_SESSION['message']=" <div class='chip red black-text ' >login  to continue</div><?";

    header("Location:login.php");
}
?>