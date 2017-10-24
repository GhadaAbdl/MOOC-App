<?php
require_once('connect.php');



$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$xml = new SimpleXMLElement('<xml/>');
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $mydata = $xml->addChild('mydata');
        $mydata->addChild('id',$row['id']);
        $mydata->addChild('name',$row['name']);
        $mydata->addChild('surname',$row['surname']);
        $mydata->addChild('birth_date',$row['birth_date']);
        $mydata->addChild('email',$row['email']);
        $mydata->addChild('password',$row['password']);
        $mydata->addChild('level',$row['level']);
        $mydata->addChild('type',$row['type']);
        $mydata->addChild('img_link',$row['img_link']);
         }
} else {
    echo "0 results";
}
$conn->close();
header ("Content-Type:text/xml");
	 echo($xml->asXML());
?>