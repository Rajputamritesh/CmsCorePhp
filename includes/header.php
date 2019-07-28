<?php
ob_start();//gives output
session_start();//helps creating session

include "includes/dbh.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!--compiled and materialized -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<body>

<nav class="navbar teal" >
  <div class="container-fluid">
    <div class="navbar-header " >
      <a class="navbar-brand" href="#" style="margin-left:500px">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav " style="float:right">
      <li class="active"><a href="#">Home</a></li>
      <li ><a href="#">Page 1</a>
       
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
  

</body>
</html>
