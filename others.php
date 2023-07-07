
<?php

$user = 'root';
$password = '';
$database = 'pawsdbms';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);


if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}


$sql = " SELECT * FROM pets where species not in('cat','dog','bird')";

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

	<title>PAWS</title>
</head>

<body>

<ul>
      <li><img src="images/logo.png"></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="signin.php">Login</a></li>
      <li><a href="pets.php">Pets</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="about.php">About</a></li>
    </ul>  
<section class="category" id="category">

    <h1 class="heading">Unique Cuties</h1>
    
    <div class="box-container" >
    
        <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/other1.jpg" alt="">
            <div class="content">
                <h3>Catty</h3>
                <a href="index6.html" class="btn">More Info</a>
            </div>
        </div>
        <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/other2.jpg" alt="">
            <div class="content">
                <h3>Oliver</h3>
                <a href="index6.html" class="btn">More Info</a>
            </div>
        </div>
        <div class="box"style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
            <img src="images/other3.jpg" alt="">
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
                    <img src="images/other4.jpg" alt="">
                    <div class="content">
                        <h3>Leo</h3>
                        <a href="index6.html" class="btn">More Info</a>
                    </div>
                </div>
                <div class="box" style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
                    <img src="images/other5.jpg" alt="">
                    <div class="content">
                        <h3>Kira</h3>
                        <a href="index6.html" class="btn">More Info</a>
                    </div>
                </div>
                <div class="box"style="border-radius: 30px;box-shadow: 2px 2px 2px rgb(3, 74, 3)">
                    <img src="images/other6.jpg" alt="">
                    <div class="content">
                        <h3>Molly</h3>
                        <a href="index6.html" class="btn">More Info</a>
                    </div>
                </div>
 
            
            </div>
            
            </section>
            <center>
	<section>
		<h1>We have</h1>

		<table class="styled-table">
      <thead>
			<tr>
				<th>Pid</th>
				<th>Name</th>
				<th>Species</th>
				<th>Breed</th>
			</tr>
  </thead>
	
			<?php
			
				while($rows=$result->fetch_assoc())
				{
			?>
      <tbody>
			<tr>
			
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
