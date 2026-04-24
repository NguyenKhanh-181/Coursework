<?php
session_start();
include 'includes/databaseconnection.php';

try {

    $sql = 'DELETE FROM review WHERE filmid = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    $sql = 'DELETE FROM film WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    header('location: adminfilms.php');
    exit;

} catch (PDOException $e) {
    echo $e->getMessage();
}