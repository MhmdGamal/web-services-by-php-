<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "messages";

$name=$_POST['name'];
$pass=$_POST['password'];
$message=$_POST['message'];
$to_w=$_POST['to_w'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `chat`( `name`, `password`, `message`, `to_w`)
 VALUES ('$name','$pass','$message','$to_w')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>