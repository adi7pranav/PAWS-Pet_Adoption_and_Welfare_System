<?php
include "../db_conn.php";
if (isset($_POST['pid'])) {
    $pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $species = mysqli_real_escape_string($conn, $_REQUEST['species']);
    $breed = mysqli_real_escape_string($conn, $_REQUEST['breed']);
    $nid = mysqli_real_escape_string($conn, $_REQUEST['nid']);
    $sid = mysqli_real_escape_string($conn, $_REQUEST['sid']);
    $vid = mysqli_real_escape_string($conn, $_REQUEST['vid']);
    $uname = mysqli_real_escape_string($conn, $_REQUEST['uname']);

    $sql = "INSERT INTO pets(pid,pname,species,breed,nid,sid,vid,uname)  VALUES ('$pid', '$name', '$species','$breed','$nid','$sid','$vid','$uname') on duplicate key update pid='$pid', pname='$name', species='$species', breed='$breed', nid='$nid', sid='$sid', vid='$vid', uname='$uname'";
    if (mysqli_query($conn, $sql)) {

        header("location:../admin.php");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
?>