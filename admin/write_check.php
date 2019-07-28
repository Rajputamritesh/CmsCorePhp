<?php include "include/head.php"?>
<?php
if(isset($_POST['publish']))
{
    $data=$_POST['ckeditor'];
    $title=$_POST['title'];
    $title=mysqli_real_escape_string($conn,$title);
    $title=htmlentities($title);
    $data=mysqli_real_escape_string($conn,$data);
    //$data=htmlentities($data);
    $image=$_FILES['image'];
    $img_name=$_FILES['image']['name'];
    $img_size=$_FILES['image']['size'];
    $tmp_dir=$_FILES['image']['tmp_name'];
    $type=$_FILES['image']['type'];
  
    if($type=="image/jpeg"||$type=="image/png"||$type=="image/jpg"||$type="image/JPG")
    {

        if($img_size<=209715000002)
        {

            move_uploaded_file($_FILES['image']['tmp_name'],"../img/".$img_name);//move_uploaded_file(sourcepath,destinationpath);

                   $quer=mysqli_query($conn,"insert into posts (title,content,image) values('$title','$data','$img_name')");

    $_SESSION['message']=" <div class='chip green black-text ' >Post Published</div><?";
         header("location:write.php");
        }
        else{

            $_SESSION['message']=" <div class='chip red black-text ' >image size exceeded</div><?";
            header("location:write.php");
        }

    }
    else{

        $_SESSION['message']=" <div class='chip red black-text ' >image type not supported</div><?";
        header("location:write.php");
    }




    

}
?>