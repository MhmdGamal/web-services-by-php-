<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "messages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `chat` ";
$result = $conn->query($sql);
$test=array();
while($row=$result->fetch_assoc()){

      array_push($test,$row);
}
echo json_encode($test);

$conn->close();
?>