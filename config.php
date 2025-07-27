<?php
// config.php

$host = "localhost";
$user = "u705109916_employee";
$password = "91LB/xsn9A#"; // replace if updated
$database = "u705109916_employee";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4 for emoji and multilingual support
$conn->set_charset("utf8mb4");

// Optional: disable strict error reporting in production
// error_reporting(0);

// Optional: timezone set
date_default_timezone_set('Asia/Kolkata');

// Now you can use $conn in your project files
?>
