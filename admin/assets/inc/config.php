<?php
$dbuser = "root";
$dbpass = "root";
$host = "localhost";
$db = "hmisphp";

// Create connection
$conn = new mysqli($host, $dbuser, $dbpass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
