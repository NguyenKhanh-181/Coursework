<?php
session_start();

if ($_SESSION['role'] !== 'admin') {
    echo "Access denied";
    exit;
}
try{
include 'includes/databaseconnection.php';
include 'includes/databasefunction.php';
deleteReviews($pdo, $_POST['id']);
header('location: reviews.php');
}catch(PDOException $e) {
    $title = 'An error has occured';
    $output = 'Unable to connect to delete review: ' . $e->getMessage();
}
include 'templates/layout.html.php';