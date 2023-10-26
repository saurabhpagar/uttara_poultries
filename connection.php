<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'uttara_db';

// Create a new mysqli instance
$mysqli = new mysqli($host, $username, $password);

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Select the database
if (!$mysqli->select_db($database)) {
    echo "Failed to select database: " . $mysqli->error;
    exit();
}

// ... Rest of your code ...
?>
