<?php
session_start();
include 'includes/databaseconnection.php';

if (isset($_POST['title'])) {
    // UPDATE
    $sql = 'UPDATE film SET title = :title, poster = :poster WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':poster', $_POST['poster']);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    header('location: adminfilms.php');
    exit();
} else {
    // LOAD DATA
    $sql = 'SELECT * FROM film WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $film = $stmt->fetch();

    $title = 'Edit Film';

    ob_start();
    include 'templates/editfilm.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';