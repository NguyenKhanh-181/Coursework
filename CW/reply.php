<?php
session_start();
include 'includes/databaseconnection.php';

$sql = 'UPDATE contact SET reply = :reply WHERE id = :id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':reply', $_POST['reply']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

header('location: contact.php');