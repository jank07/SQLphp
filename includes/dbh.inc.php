<?php

$dsn = "mysql:host=localhost;dbname=phpexercise";
$dbusername = "root";
$dbpassword = "";

try {
    // connecting to db
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // if error throw exception
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}