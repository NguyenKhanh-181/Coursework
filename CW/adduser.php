<?php
session_start();
include 'includes/databaseconnection.php';

if (isset($_POST['username'])) {
    $sql = 'INSERT INTO users (username, password, role, email) VALUES (:username, :password, :role, :email)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $_POST['username']);
    $stmt->bindValue(':password', $_POST['password']);
    $stmt->bindValue(':role', 'user');
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->execute();

    header('location: adminusers.php');
    exit();
}

$title = 'Add User';

ob_start();
include 'templates/adduser.html.php';
$output = ob_get_clean();

include 'templates/layout.html.php';