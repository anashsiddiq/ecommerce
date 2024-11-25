<?php
// Database connection settings
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = null; // Your database password
$dbname = "grocerydb"; // Your database name

// Create a connection using mysqli
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Uncomment the following line for debugging purposes
// echo "Connected successfully";
?>
