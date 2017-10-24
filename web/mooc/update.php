<?php
require_once('connect.php');



$name=$_GET['name'];
$email=$_GET['email'];
$level=$_GET['level'];

$surname=$_GET['surname'];




$sql = "update users set email='$email',email_canonical='$email' , name='$name',level='$level' where surname='$surname'";



if (mysqli_query($conn, $sql)) {
    echo "successfully added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>