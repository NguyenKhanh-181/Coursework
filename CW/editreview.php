<?php
session_start();

try {
    include 'includes/databaseconnection.php';

    if (isset($_POST['reviewtext'])) {

        $sql = 'UPDATE review SET reviewtext = :reviewtext WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'reviewtext' => $_POST['reviewtext'],
            'id' => $_POST['id']
        ]);

        header('location: reviews.php');
        exit;

    } else {

        $sql = "SELECT * FROM review WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => $_GET['id']]);

        $review = $stmt->fetch();

        $title = 'Edit Review';

        ob_start();
        include 'templates/editreview.html.php';
        $output = ob_get_clean();
    }

} catch (PDOException $e) {
    $title = 'Error';
    $output = 'Error editing review: ' . $e->getMessage();
}

include 'templates/layout.html.php';
?>