<?php
session_start();
include 'includes/databaseconnection.php';

if (isset($_POST['title'])) {

    $sql = 'INSERT INTO film SET
        title = :title,
        poster = :poster';

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':poster', $_POST['poster']);
    $stmt->execute();

    header('location: adminfilms.php');
    exit;
}

$title = 'Add Film';

ob_start();
include 'templates/addfilm.html.php';
$output = ob_get_clean();

include 'templates/layout.html.php';