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
if(isset($_POST['nnid']) && isset($_POST['type']))
{
$nid = mysqli_real_escape_string($conn, $_REQUEST['nnid']);
$nname = mysqli_real_escape_string($conn, $_REQUEST['nname']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
// Attempt insert query execution
$sql = "update store set sname='$nname', saddress='$address' where sid='$nid'";
if(mysqli_query($conn, $sql)){
    if(isset($_POST['type'])) header("location:../home/store.php");
    // echo "Records added successfully.";
    else
    header("location:../admin.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// $nid = mysqli_real_escape_string($conn, $_REQUEST['nnid']);
// $nname = mysqli_real_escape_string($conn, $_REQUEST['nname']);
// $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
// // Attempt insert query execution
// $sql = "INSERT INTO ngo VALUES ('$nid', '$nname', '$address')";
// if(mysqli_query($conn, $sql)){
//     // echo "Records added successfully.";
//     header("location:../admin.php");
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
// Close connection
// mysqli_close($link);
?>