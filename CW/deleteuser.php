<?php
session_start();
include 'includes/databaseconnection.php';

$sql = 'DELETE FROM users WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

header('location: adminusers.php');
exit();