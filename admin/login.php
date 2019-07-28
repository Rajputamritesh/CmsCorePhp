<?php 
include "include/head.php";

?>
	
	
	
	
		<script>
		$(document).ready(function(){
  $("#sub").click(function(){
			var x=$('#password').val();
			var y=$('#password-confirm').val();
		   console.log(x);
			 console.log(y);
			if(x==y)
			{
		  console.log('hi');
			}
			else{
			alert('password not match');
			return false;//locates back to same page and stop form to redirect to another page
		}
			
		


  });
});
		</script>









<div class="container white z-depth-2">
	<ul class="tabs teal">
		<li class="tab col s3"><a class="white-text active" href="#login">login</a></li>
		<li class="tab col s3"><a class="white-text" href="#register">register</a></li>
	</ul>
	<div id="login" class="col s12">
		<form class="col s12" action="login_check.php" method ="POST">
			<div class="form-container">

				<h3 class="teal-text">User Login</h3>
				<?php
if(isset($_SESSION['message']))
{ 
	echo $_SESSION['message'];
	unset ($_SESSION['message']);
}
?>

				<div class="row">
					<div class="input-field col s12">
						<input id="usernam" type="text" name="usernam">
						<label for="usernam">Username</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="passwordlogin" type="password" name="passwordlogin" class="validate">
						<label for="passwordlogin">Password</label>
					</div>
				</div>
				<br>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="login">Login In</button>
					<br>
					<br>
					<a href="">Forgotten password?</a>
				</center>
			</div>
		</form>
	</div>
	<!-------------------------------------sign up-->
	<div id="register" class="col s12">
		<form class="col s12" action="signup.php" method="POST">
			<div class="form-container">
				<h3 class="teal-text">Register Here</h3>
				<div class="row">
					
					<div class="input-field col s12">
						<input id="username" type="text" name="username" class="validate">
						<label for="username">Username</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" name="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email-confirm" type="email"  class="validate">
						<label for="email-confirm">Email Confirmation</label>
					
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" name="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password-confirm" type="password" class="validate">
						<label for="password-confirm">Password Confirmation</label>
					</div>
				</div>
				<center>
					<button class="btn waves-effect waves-light teal"  id="sub" type="submit" name="signup">Submit</button>
				</center>
			</div>
		</form>
	</div>
</div>
