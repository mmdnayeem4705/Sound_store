<?php
// Use environment variables for Vercel and local fallback values.
$servername = $_ENV['MYSQL_HOST'] ?? 'localhost';
$username = $_ENV['MYSQL_USER'] ?? 'root';
$password = $_ENV['MYSQL_PASSWORD'] ?? '';
$dbname = $_ENV['MYSQL_DB'] ?? 'ecommerce';

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
