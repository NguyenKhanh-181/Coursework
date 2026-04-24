<?php
session_start();

if (isset($_POST['username'])) {

    include 'includes/databaseconnection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM users WHERE username = :username AND password = :password';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'] ?? 'user';

        header('location: index.php');
        exit;
    } else {
        $error = 'Invalid login';
    }
}

$title = 'Login';

ob_start();
include 'templates/login.html.php';
$output = ob_get_clean();

include 'templates/layout.html.php';