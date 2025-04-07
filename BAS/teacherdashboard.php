<?php
session_start();
if ($_SESSION['role'] !== 'teacher') {
    header('Location: login.php');
    exit;
}
echo "<h1>Welcome, Teacher " . $_SESSION['username'] . "!</h1>";
echo "<a href='logout.php'>Logout</a>";
