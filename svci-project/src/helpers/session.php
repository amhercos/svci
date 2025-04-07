<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function getUserRole() {
    return $_SESSION['role'] ?? null;
}

function logout() {
    session_unset();
    session_destroy();
    header("Location: /login.php");
    exit;
}
?>