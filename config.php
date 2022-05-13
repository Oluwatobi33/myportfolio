<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "new";

$dsn = "mysql:host=".$host.";dbname=".$db;

// create a pdo instant
$conn = new PDO($dsn,$username,$pass);
print_r($conn);
?>