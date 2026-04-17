<?php
session_start();
include 'includes/databaseconnection.php';

$sql = 'SELECT * FROM contact ORDER BY created_at DESC';
$messages = $pdo->query($sql)->fetchAll();

$title = 'Contact Messages';

ob_start();
include 'templates/admincontact.html.php';
$output = ob_get_clean();

include 'templates/layout.html.php';