<?php
$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual password if you have set any
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

