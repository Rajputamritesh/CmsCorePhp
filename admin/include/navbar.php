

<body>
<nav class="teal">
<div class="nav-wrapper ">
<div class="container">

<a href="" class="brand-logo center">CMS WEBSITE</a>
<a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">list</i></a>

<ul class="side-nav fixed" id="sidenav">

<div class="user-view">
<div  class="background" style="background-image:url('../img/nm.jpg')">


<a href=""><img src="../img/keneau.jpg" class=" circle responsive-img " alt=""></a><br>
<span class="name yellow-text bold"><?php
echo $_SESSION['username'];
?></span>
<span class="email yellow-text bold "><?php 
$use=$_SESSION['username'];
$quer=mysqli_query($conn,"select email from users where username='$use' ");
$row=mysqli_fetch_assoc($quer);
echo $row['email'];

?></span>
</div>
</div>
<li>
<a href="dashboard.php">Dashboard</a>
</li>

<li>
<a href="post.php">Post</a>
</li>
<li>
<a href="image.php">Images</a>
</li>
<li>
<a href="">Comments</a>
</li>
<li>
<a href="settings.php">Settings</a>
</li>

<div class="divider">


</div>

<li><a href="logout.php">Logout</a></li>
</ul>





</div>

</div>

</nav>
<script>
		$(document).ready(function(){
            $('.button-collapse').sideNav();
			
		


  });

		</script>
        </body>