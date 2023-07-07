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
if(isset($_POST['vid']))
{
$nid = mysqli_real_escape_string($conn, $_REQUEST['vid']);
$nname = mysqli_real_escape_string($conn, $_REQUEST['name']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
// Attempt insert query execution
$sql = "INSERT INTO vet(vid,vname,vaddress) VALUES ('$nid', '$nname', '$address') on duplicate key update vid='$nid', vname='$nname', vaddress='$address' ;";
if(mysqli_query($conn, $sql)){
    // echo "Records added successfully.";
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