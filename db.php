<?php
$host = "localhost";
$user = "root";       // Default for XAMPP
$pass = "";           // Default for XAMPP
$dbname = "user_auth";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
