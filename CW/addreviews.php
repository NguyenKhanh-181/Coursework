<?php
session_start();

include 'includes/databaseconnection.php';
include 'includes/databasefunction.php';

if (isset($_POST['reviewtext'])) {

    try {

        addReviews(
            $pdo,
            $_POST['reviewtext'],
            $_POST['reviewername'],
            $_POST['filmid']
        );

        header('location: reviews.php');
        exit;

    } catch (PDOException $e) {

        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }

} else {
    $sql = 'SELECT id, title FROM film';
    $films = $pdo->query($sql)->fetchAll();

    $sql = 'SELECT username FROM users';
    $users = $pdo->query($sql)->fetchAll();

    $title = 'Add a new review';

    ob_start();
    include 'templates/addreviews.html.php';
    $output = ob_get_clean();
}

include 'templates/layout.html.php';
?>