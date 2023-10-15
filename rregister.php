<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";

// Create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fname = $_POST['a'];
$uname = $_POST['b'];
$email = $_POST['c'];
$phone = $_POST['d'];
$pass = $_POST['e'];
$cpass = $_POST['f'];

$sql = "INSERT INTO register (fullname,username,Email,phonenumber,password,confirmpassword) VALUES ('$fname','$uname', '$email', '$phone','$pass','$cpass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<meta http-equiv="refresh" content="2;url=login.html">';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
