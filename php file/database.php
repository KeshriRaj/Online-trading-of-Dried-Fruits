<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dryfuitswebsite";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    exit;
} 
?>