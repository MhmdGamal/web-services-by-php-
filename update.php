<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "messages";

$xname=$_POST['xname'];
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

$sql = "UPDATE `chat` SET `name`='$name',
`password`='$pass',`message`='$message',`to_w`='$to_w' WHERE `name`='$xname'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>