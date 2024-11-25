<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "ps27";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database not connected. Error: " . $conn->connect_error);
}
?>
