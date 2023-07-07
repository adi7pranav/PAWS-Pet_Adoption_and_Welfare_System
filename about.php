
<?php
$user = 'root';
$password = '';
$database = 'pawsdbms';
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
$sql = " SELECT * FROM pets where species='cat'";
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
      <li><a href="fetch.php">Pets</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="about.php">About</a></li>
    </ul>     
<!-- </div>  -->
<section class="category" id="category">

    <h1 class="heading">About US</h1>
    
    <div class="box-container" >
    <div class="box"style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/us1.png" alt="">
            <div class="content">
                <h3>P P Shashwath Aiyappa<br> 1BY20IS106</h3>
                <a href="index6.html" class="btn">More Info</a>
            </div>
        </div>
    
        <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/us2.png" alt="">
            <div class="content">
                <h3>Pranav Aditya<br> 1BY20IS114</h3>
                <a href="index6.html" class="btn">More Info</a>
            </div>
        </div>
        <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/us3.png" alt="">
            <div class="content">
                <h3>Pratham R Kakade<br> 1BY20IS115</h3>
                <a href="index6.html" class="btn">More Info</a>
            </div>
        </div>
        
    
    </div>
    
    </section>




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
