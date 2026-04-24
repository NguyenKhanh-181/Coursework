<?php
session_start();
try {
    include 'includes/databaseconnection.php';
    include 'includes/databasefunction.php';
    $reviews = getReviews($pdo);
    $current_user = $_SESSION['username'] ?? '';

    $title = 'Review List';
    $totalReviews = totalReviews($pdo);

    ob_start();
    include 'templates/reviews.html.php';
    $output = ob_get_clean();

} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include 'templates/layout.html.php';
?>