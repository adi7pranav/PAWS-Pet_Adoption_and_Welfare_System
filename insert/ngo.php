<?php

include "../db_conn.php";
 

if(isset($_POST['nnid']))
{
$nid = mysqli_real_escape_string($conn, $_REQUEST['nnid']);
$nname = mysqli_real_escape_string($conn, $_REQUEST['nname']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);

$sql1 = "INSERT INTO ngo (nid,nname,naddress) VALUES ('$nid', '$nname', '$address') on duplicate key update nid='$nid', nname='$nname', naddress='$address' ;";
if(mysqli_query($conn, $sql1)){

    if(isset($_POST['type']) && $_POST['type']=='ngo' ) header("location:../home/ngo.php");

    else
    header("location:../admin.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// if(mysqli_query($conn, $sql)){
//     // echo "Records added successfully.";
//     header("location:../home/ngo.php");
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
// }

// } else {
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
// }
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