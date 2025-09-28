<?php
$host = 'localhost';
$dbname = 'your_database';  // Change this to your database name
$username = 'root';
$password = '';             // Usually empty for XAMPP/WAMP

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
