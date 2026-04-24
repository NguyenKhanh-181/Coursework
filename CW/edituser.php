<?php
session_start();
include 'includes/databaseconnection.php';

if (isset($_POST['username'])) {
    $sql = 'UPDATE users SET username = :username, password = :password, email = :email WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $_POST['username']);
    $stmt->bindValue(':password', $_POST['password']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    header('location: adminusers.php');
    exit();
} else {
    $sql = 'SELECT * FROM users WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $user = $stmt->fetch();

    $title = 'Edit User';

    ob_start();
    include 'templates/edituser.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';