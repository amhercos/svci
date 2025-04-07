<?php
$host = 'localhost';
$db   = 'svci';
$user = 'amher';
$pass = 'password';

try {
    $pdo = new PDO("pgsql:host=$host;svci=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}
