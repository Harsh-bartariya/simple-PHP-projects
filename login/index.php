<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3>Login here</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <!-->add php code for validate user credentials from database here<-->
  <div class="reminder">
    <p>Not a member? <a href="signup.html">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  
</div>

</body>
</html>