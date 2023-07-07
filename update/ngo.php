<?php

include "../db_conn.php";

if(isset($_POST['nnid']) && isset($_POST['type']))
{
    $nid = mysqli_real_escape_string($conn, $_REQUEST['nnid']);
$nname = mysqli_real_escape_string($conn, $_REQUEST['nname']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);

$sql1 = "INSERT INTO ngo(nid,nname,naddress) VALUES ('$nid', '$nname', '$address') on duplicate key update nid='$nid', nname='$nname', naddress='$address'";
if(mysqli_query($conn, $sql)){
    if(isset($_POST['type'])) header("location:../home/ngo.php");

    else
    header("location:../admin.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>