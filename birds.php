<!-- PHP code to establish connection with the localserver -->
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
$sql = " SELECT * FROM pets where species='bird'";
// --  ORDER BY score DESC ";
$result = $mysqli->query($sql);
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
<section class="category" id="category">

    <h1 class="heading">Beautiful Birds</h1>
    
    <div class="box-container" >
    
        <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/bird1.jpg" alt="">
            <div class="content">
                <h3>Catty</h3>
                <a href="index6.html" class="btn">More Info</a>
            </div>
        </div>
        <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/bird2.jpg" alt="">
            <div class="content">
                <h3>Oliver</h3>
                <a href="index6.html" class="btn">More Info</a>
            </div>
        </div>
        <div class="box"style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/bird3.jpg" alt="">
            <div class="content">
                <h3>Luna</h3>
                <a href="index6.html" class="btn">More Info</a>
            </div>
        </div>
    
    </div>
    
    </section>


        <section class="category" id="category">
            
            <div class="box-container" >
            
                <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
                    <img src="images/bird4.jpg" alt="">
                    <div class="content">
                        <h3>Leo</h3>
                        <a href="index6.html" class="btn">More Info</a>
                    </div>
                </div>
                <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
                    <img src="images/bird5.jpg" alt="">
                    <div class="content">
                        <h3>Kira</h3>
                        <a href="index6.html" class="btn">More Info</a>
                    </div>
                </div>
                <div class="box"style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
                    <img src="images/bird6.jpg" alt="">
                    <div class="content">
                        <h3>Molly</h3>
                        <a href="index6.html" class="btn">More Info</a>
                    </div>
                </div>
                <!-- <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
                    <img src="hou12.jpg" alt="">
                    <div class="content">
                        <h3>Lucky Bamboo</h3>
                        <a href="index6.html" class="btn">Buy now</a>
                    </div>
                </div> -->
            
            </div>
            
            </section>
            <center>
	<section>
		<h1>All Birds</h1>
		<!-- TABLE CONSTRUCTION -->
		<table class="styled-table">
      <thead>
			<tr>
				<th>Pid</th>
				<th>Name</th>
				<th>Species</th>
				<th>Breed</th>
			</tr>
  </thead>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
      <tbody>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['pid'];?></td>
				<td><?php echo $rows['pname'];?></td>
				<td><?php echo $rows['species'];?></td>
				<td><?php echo $rows['breed'];?></td>
			</tr>
        
			<?php
				}
			?>
      </tbody>
		</table>
	</section>
      </center>




            <section class="footer" style="background-color: black;">

                <div class="box-container">
            
                <div class="box" id="contact">
            <h3>About Us</h3>
            <p>An initiative to save lives!</p>
        </div>
                    <div class="box">
                        <h3>quick links</h3>
                        <a href="#home">home</a>
                        <a href="#category">category</a>
                
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
