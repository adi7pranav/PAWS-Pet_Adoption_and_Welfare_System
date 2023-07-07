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
$sql = " select p.pid,p.pname,p.species,p.breed,n.nname,s.sname,v.vname from users u,pets p,ngo n,vet v,store s where p.uname=u.uname and p.sid=s.sid and p.nid=n.nid AND p.vid=v.vid and u.uname='$uname'" ;
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
      <li><a href="pets.php">Pets</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="../about.php">About</a></li>
      
      <li><a href="cust.php">Hello, <?php echo $uname; ?></a></li>
      <li><a href="../logout.php">Logout</a></li>
      <!-- <li></li> -->
    </ul>  
     <!-- <h1>Hello, </h1> -->
     <!-- <a href="logout.php">Logout</a> -->
     <center>
	


	 <section><br>
		<h1>Pets Adopted</h1>
		<!-- TABLE CONSTRUCTION -->
        <div id="table_wrap">
		<table class="styled-table">
      <thead>
			<tr>
				<th style>Pid</th>
				<th>Name</th>
				<th>Species</th>
				<th>Breed</th>
                <th>Ngo_id</th>
                <th>Store_id</th>
                <th>Vet_id</th>
             
                <!-- <th>Action</th> -->
<!-- 
			</tr>
            <form action="../insert/pet.php" method="post">
            <tr>
				<th ><label for="pid"></label><input type="text" name="pid" id="pid"></th>
        <th><label for="name"></label><input type="text" name="name" id="name"></th>
        <th><label for="species"></label><input type="text" name="species" id="species"></th>
        <th><label for="breed"></label><input type="text" name="breed" id="breed"></th>
        <th><label for="nid"></label><input type="text" name="nid" id="nid"></th>
        <th><label for="sid"></label><input type="text" name="sid" id="sid"></th>
        <th><label for="vid"></label><input type="text" name="vid" id="vid"></th>
       
                <th><input type="submit" value="Insert"></th>
			</tr> -->
<!-- </form>
<form action="../update/pet.php" method="post">
            <tr>
				<th ><label for="pid"></label><input type="text" name="pid" id="pid"></th>
        <th><label for="name"></label><input type="text" name="name" id="name"></th>
        <th><label for="species"></label><input type="text" name="species" id="species"></th>
        <th><label for="breed"></label><input type="text" name="breed" id="breed"></th>
        <th><label for="nid"></label><input type="text" name="nid" id="nid"></th>
        <th><label for="sid"></label><input type="text" name="sid" id="sid"></th>
        <th><label for="vid"></label><input type="text" name="vid" id="vid"></th>
        
                <th><input type="submit" value="Update"></th>
			</tr>
</form> -->
  </thead>

  


			<?php
				// LOOP TILL END OF DATA
                // $table_name="ngo";
                
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
                <td><?php echo $rows['nname'];?></td>
                <td><?php echo $rows['sname'];?></td>
                <td><?php echo $rows['vname'];?></td>
               
               
			</tr>
        
			<?php
				}
			?>
      </tbody>
		</table>
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
      </center>
</body>
</html>

<?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>