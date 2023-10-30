<?php
// Database connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'marketing';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO userdata (name, address, email) VALUES ('$name', '$address', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Item Ordered Successfull!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
