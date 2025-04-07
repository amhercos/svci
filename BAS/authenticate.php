<?php
session_start();
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] === 'admin') {
            header("Location: admindashboard.php");
        } elseif ($user['role'] === 'teacher') {
            header("Location: teacherdashboard.php");
        } else {
            $_SESSION['error'] = "Invalid user role.";
            header("Location: login.php");
        }
    } else {
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: login.php");
    }
}
