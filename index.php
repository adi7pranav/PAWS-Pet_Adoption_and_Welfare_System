<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'pawsdbms';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql1 = " SELECT * FROM counts where type='pets'";
$result1 = $mysqli->query($sql1);
$sql2 = " SELECT * FROM counts where type='users'";
$result2 = $mysqli->query($sql2);
$sql3= " SELECT * FROM counts where type='ngo'";
$result3 = $mysqli->query($sql3);
$sql4 = " SELECT * FROM counts where type='store'";
$result4 = $mysqli->query($sql4);

$mysqli->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css"> -->
	<title>PAWS</title>
</head>
<!-- http://localhost/phpmyadmin/index.php?route=/database/structure&db=paws -->
<body>
<!-- <div id="bgimage"> -->
  <ul>
      <li><img src="images/logo.png"></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="signin.php">Login</a></li>
      <li><a href="pets.php">Pets</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="about.php">About</a></li>
    </ul>       
<!-- </div>  -->
<section class="home" id="home">

    <div class="swiper-container home-slider">
                
                <div class="box" style="background: url(images/bg12.jpg); ">
                    <div class="content"><br><br><br>
                        <span>Save Lives With US </span>
                        <h3>PAWS</h3>
                        <a href="login.php" class="btn">Join Us</a>
                    </div>
            </div>
    </div>

</section>
<center>
	<section>
		<h1>Our Impact</h1>
		<!-- TABLE CONSTRUCTION -->
		<table class="styled-table">
      <thead>
			<tr>
				<th>Lives Saved</th>
				<th>Users</th>
				<th>NGOs</th>
				<th>Stores</th>
			</tr>
  </thead>
			
  <tbody><!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
            
				// LOOP TILL END OF DATA
				while( $rows1=$result1->fetch_assoc())
				{
                    // $rows1 = $result1->fetch_assoc();
            $rows2 = $result2->fetch_assoc();
            $rows3 = $result3->fetch_assoc();
            $rows4 = $result4->fetch_assoc();
			?>
      
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows1['count'];?></td>
                <td><?php echo $rows2['count'];?></td>
                <td><?php echo $rows3['count'];?></td>
                <td><?php echo $rows4['count'];?></td>
				
			</tr>
        
			<?php
				}
			?>
      </tbody>
		</table>
	</section>
      </center>
<section class="category" id="category">

<h1 class="heading"> Categories </h1>

<div class="box-container" >

    <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
        <img src="images/cat.jpg" alt="">
        <div class="content">
            <h3>Cats</h3>
            <a href="cats.php" class="btn">Explore</a>
        </div>
    </div>
    <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
        <img src="images/dog.jpg" alt="">
        <div class="content">
            <h3>Dogs</h3>
            <a href="dogs.php" class="btn">Explore</a>
        </div>
    </div>
    <div class="box"style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
        <img src="images/bird.jpg" alt="">
        <div class="content">
            <h3>Birds</h3>
            <a href="birds.php" class="btn">Explore</a>
        </div>
    </div>
    <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
        <img src="images/other.jpg" alt="">
        <div class="content">
            <h3>Others</h3>
            <a href="others.php" class="btn">Explore</a>
        </div>
    </div>

</div>

</section>
<!-- <a id="contact"> -->
<section class="footer" style="background-color: black;">

    <div class="box-container">

        <div class="box" id="contact">
            <h3>About Us</h3>
            <p>An initiative to save lives!</p>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">category</a>
    
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linked</a>
        </div>

    </div>
    
</section>
	
</body>
</html>
