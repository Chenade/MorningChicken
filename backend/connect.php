<?php
header('Content-Type: application/json');

$host = "localhost"; 
$username = "newuser"; 
$password = "Fuckyou9487!"; 
$database = "zheng"; 

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>