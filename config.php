<?php
$host = "localhost";
$user = "u705109916_fusionair"; // Your database username
$pass = "6EI909F>a";            // Your database password
$db   = "u705109916_fusionair"; // Your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
