<?php
require_once('connect.php');



$password=$_GET['password'];


$surname=$_GET['surname'];




$sql = "update users set password='$password' where surname='$surname'";



if (mysqli_query($conn, $sql)) {
    echo "successfully added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>