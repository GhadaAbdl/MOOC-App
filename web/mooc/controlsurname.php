<?php
require_once('connect.php');



$surname=$_GET['surname'];
$aa="test";


$sql = "SELECT * FROM users where surname = '$surname'";
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