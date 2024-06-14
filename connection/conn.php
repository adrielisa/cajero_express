<?php

$hostname = "localhost";
$username = "root";
$database = "cajero_express";

$conn = new mysqli($hostname, $username, $password, $databse);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>