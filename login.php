
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>WELCOME</h2>
  </div>
	 
  <form method="post" action="login.html">
  <font size="2" color="blue">
<h1>HOME    ABOUTUS CONTACTUS</h1>
   </font>
 
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Sign up</button>
  	</div>
	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>