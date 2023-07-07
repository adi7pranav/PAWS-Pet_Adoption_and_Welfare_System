<?php 
session_start();
// if (isset($_SESSION['id']) && isset($_SESSION['user_name']))
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
$uname = $_SESSION['uname'];
// SQL query to select data from database
$sql = " select * from pets where uname=''" ;
// --  ORDER BY score DESC ";
$result = $mysqli->query($sql);
$sql1 = " SELECT * FROM users where uname='$uname'";
$result1 = $mysqli->query($sql1);
$mysqli->close();
if (isset($_SESSION['name'])) 
{
     // isset($_SESSION['email']) && 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="../style1.css">
</head>
<body>
<ul>
      <li><img src="../images/logo.png" ></li>
      <li><a href="../index.php">Home</a></li>
      <!-- <li><a href="signin.php">Login</a></li> -->
      <li><a href="../fetch.php">Pets</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="about.php">About</a></li>
      
      <li><a href="cust.php">Hello, <?php echo $uname; ?></a></li>
      <li><a href="../logout.php">Logout</a></li>
      <!-- <li></li> -->
    </ul>  
     <!-- <h1>Hello, </h1> -->
     <!-- <a href="logout.php">Logout</a> -->
     <center>
	


	 <section>
		<h1>All Pets
        </h1>
		<!-- TABLE CONSTRUCTION -->
		<table class="styled-table">
      <thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Breed</th>
				<th>Action</th>
                <!-- <th>Delete</th> -->
			</tr>
			
  </thead>
  </tr>
            
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
			
                <td><a href="../update/adopt.php?pid=<?php echo $rows['pid']; ?>"><button type="button" style="background-color: #0f4548;
  border: none;
  color: white;
  padding: 10px 10px;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;">Adopt</button></a></td>
			</tr>
        
			<?php
				}
			?>
      </tbody>
		</table>
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
      </center>
</body>
</html>

<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>