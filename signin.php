<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<script src="validate.js"></script>
</head>
<body>
<a href="index.php"><img src="images/logo.png" height="200px" ></a>

     <form action="login.php" method="post" name="loginform" onsubmit="return validateform()">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name" id="uname"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" id="password"><br>
		
     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>