<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";

// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Assuming you have form data in variables like $name, $email, $phone, etc.
$name = $_POST['x'];
$email = $_POST['y'];
$subject = $_POST['z'];
$message = $_POST['a'];

$sql = "INSERT INTO feedback (Name,Email,subject,message) VALUES ('$name','$email','$subject','$message')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted";
    echo '<meta http-equiv="refresh" content="5;url=login.html">';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
