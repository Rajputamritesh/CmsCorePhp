<?php
ob_start();//gives output
session_start();//helps creating session

include "include/dbh.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Bootstrap Example</title>
    <!--Import Google Icon Font-->
   <!--use only thses cdns -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

  
            
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

     -->
  
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>


      <style>
  header,footer,.main{
        padding-left:250px;

  }
  @media(max-width:992px){
        footer,header,.main{
              padding-left:0px;
        }

  }

  </style>

    
</head>