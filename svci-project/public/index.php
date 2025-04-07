<?php



require '../src/database.php';
session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] === 'admin') {
        header("Location: admindashboard.php");
        exit;
    } elseif ($_SESSION['role'] === 'teacher') {
        header("Location: teacherdashboard.php");
        exit;
    }
}

header("Location: login.php");
exit;
?>