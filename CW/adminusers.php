<?php
session_start();
include 'includes/databaseconnection.php';

$sql = 'SELECT * FROM users';
$users = $pdo->query($sql)->fetchAll();

$title = 'Manage Users';

ob_start();
include 'templates/adminusers.html.php';
$output = ob_get_clean();

include 'templates/layout.html.php';