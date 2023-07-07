<?php 
// include "../db_conn.php";
session_start();
// if (isset($_SESSION['id']) && isset($_SESSION['user_name']))

// 
// 
// // Attempt insert query execution
// $sql = "update pets set uname='$uname' where pid='$pid'";
// if(mysqli_query($conn, $sql)){
//     // if(isset($_POST['type'])) header("location:../home/cust.php");
//     // // echo "Records added successfully.";
//     // else
//     // header("location:../admin.php");
//     // echo "Records added successfully.";
//     
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
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
$pid = mysqli_real_escape_string($mysqli, $_REQUEST['pid']);
    $uname = $_SESSION['uname'];
    $sql = "update pets set uname='$uname' where pid='$pid'";
if(isset($_SESSION['uname']))
{
    
// Attempt insert query execution

if(mysqli_query($mysqli, $sql)){
    // if(isset($_POST['type'])) header("location:../home/ngo.php");
    // // echo "Records added successfully.";
    // else
    header("location:../home/cust.php");
} else{
    echo "ERROR: Could not able to execute. " . mysqli_error($mysqli);
}

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}

 
// Close connection
// mysqli_close($link);
?>