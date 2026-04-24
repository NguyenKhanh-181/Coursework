<?php
session_start();
include 'includes/databaseconnection.php';

$sql = 'SELECT * FROM film';
$films = $pdo->query($sql)->fetchAll();

$title = 'Manage Films';

ob_start();
include 'templates/adminfilms.html.php';
$output = ob_get_clean();

include 'templates/layout.html.php';