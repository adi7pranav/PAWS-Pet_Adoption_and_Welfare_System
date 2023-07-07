<?php

include "../db_conn.php"; // Using database connection file here

$sid = $_GET['sid']; // get id through query string
$sql = "delete from store where sid = '$sid'";
$del = mysqli_query($conn,$sql); // delete query


if($del)
{
    // mysqli_close($del);
    // $mysqli -> close(); // Close connection
    header("location:../admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>