<?php
// Database credentials
$servername = "localhost"; // Replace with your server name or IP address
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "healsociety"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Close connection

?>
