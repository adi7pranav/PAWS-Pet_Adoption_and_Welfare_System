<!-- PHP code to establish connection with the localserver -->
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
$sql = " SELECT * FROM pets;
--  ORDER BY score DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="style1.css">
	<title>Pet Details</title>
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
  <center>
	<section>
		<h1>Pets</h1>
		<!-- TABLE CONSTRUCTION -->
		<table class="styled-table">
      <thead>
			<tr>
				
				<th>Name</th>
				<th>Species</th>
				<th>Breed</th>
				<th>Owner</th>
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
				
				<td><?php echo $rows['pname'];?></td>
				<td><?php echo $rows['species'];?></td>
				<td><?php echo $rows['breed'];?></td>
				<td><?php echo $rows['uname'];?></td>
			</tr>
        
			<?php
				}
			?>
      </tbody>
		</table>
	</section>
      </center>
</body>

</html>
