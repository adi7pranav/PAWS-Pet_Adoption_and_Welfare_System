<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "root", "", "demo");
include "../db_conn.php";
 
// Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
 
// Escape user inputs for security
$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$species = mysqli_real_escape_string($conn, $_REQUEST['species']);
$breed = mysqli_real_escape_string($conn, $_REQUEST['breed']);
$nid = mysqli_real_escape_string($conn, $_REQUEST['nid']);
$sid = mysqli_real_escape_string($conn, $_REQUEST['sid']);
$vid = mysqli_real_escape_string($conn, $_REQUEST['vid']);
$uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);
// Attempt insert query execution
$sql = "update pets set pname='$name', species='$species',breed='$breed',nid='$nid',sid='$sid',vid='$vid',uname='$uname' where pid='$pid'";
if(mysqli_query($conn, $sql)){
    if(isset($_POST['type'])) header("location:../home/cust.php");
    // echo "Records added successfully.";
    else
    header("location:../admin.php");
    // echo "Records added successfully.";
    header("location:../admin.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
// mysqli_close($link);
?>