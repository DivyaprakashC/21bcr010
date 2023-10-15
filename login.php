<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$username = $_POST['a'];
$password = $_POST['b'];

// Query to check if the user exists
$sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User is authenticated
    echo "Login successful! You will be redirected to the index page in a moment.";
    // Add a meta-refresh tag to automatically redirect after a few seconds
    echo '<meta http-equiv="refresh" content="2;url=index.html">'; // Redirect after 3 seconds
} else {
    // User is not authenticated
    echo "Login failed. Please check your credentials.";
}

// Close the connection
$conn->close();
?>
