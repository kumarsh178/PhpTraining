<?php
$host = "db";
$db   = "phptraining";
$user = "myphpuser";
$pass = "Raju0812@2025";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass
    );
    echo "✅ PHP 8.3 connected to MySQL successfully!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
