<?php
require_once('connect.php');



$surname=$_GET['surname'];
$password=$_GET['password'];


$sql = "SELECT * FROM users WHERE surname='$surname' and password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

echo "NO";
	
}
else
echo "YES";

/*
if ($aa) {
    echo "NO";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

mysqli_close($conn);



?>