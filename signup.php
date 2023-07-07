<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
<!-- <a href="index.php"><img src="images/logo.png" height="200px" ></a> -->
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="email"><br>
          <?php }?>

          <label>Address</label>
          <?php if (isset($_GET['address'])) { ?>
               <input type="text" 
                      name="address" 
                      placeholder="address"
                      value="<?php echo $_GET['address']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="address" 
                      placeholder="address"><br>
          <?php }?>
          <!-- <p> -->
          <!-- <label>Type  </label>
          <select name="type">
          <option value="">Select Type</option>
          <option value="ngo">NGO</option>
          <option value="cust">Customer</option>
          <option value="store">Store</option>
          <option value="vet">Vet</option>
          </select><br> -->
          <!-- </p> -->

     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

                 <label>Type  </label>
          <select name="type">
          <option value="">Select Type</option>
          <option value="ngo">NGO</option>
          <option value="cust">Customer</option>
          <option value="store">Store</option>
          <option value="vet">Vet</option>
          </select><br>

     	<button type="submit">Sign Up</button>
          <a href="signin.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>