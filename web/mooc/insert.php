<?php
require_once('connect.php');



$name=$_GET['name'];
$surname=$_GET['surname'];
//$birth_date=$_GET['birth_date'];
$birth_date=$_GET['birth_date'];
$email=$_GET['email'];
$password=$_GET['password'];
$enabled=1;
$level=$_GET['level'];
$type="Aprenant";
$cv_link="";
$img_link="user.png";


$rle="a:1:{i:0;s:13:\"ROLE_APRENANT\";}";

//pas de roles
$sql = "INSERT into users (username,username_canonical,email,email_canonical,enabled,password,roles,name,surname,birth_date,level,type,cv_link,img_link)
VALUES ('$surname','$surname','$email','$email','$enabled','$password','$rle','$name' ,'$surname' ,'$birth_date','$level','$type','$cv_link','$img_link')";

if (mysqli_query($conn, $sql)) {
    echo "successfully added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>