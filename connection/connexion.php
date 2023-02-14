<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$host = "localhost";
$username = "root";
$password = "";
$dbname = "lawyerdb";
$path = new SplFileInfo(__FILE__);
$_SESSION['conPath'] = $path->getRealPath();
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
