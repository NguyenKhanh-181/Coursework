<?php
session_start();

try { 
    include 'includes/databaseconnection.php';

    if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {

        $sql = 'SELECT * FROM contact ORDER BY created_at DESC';
        $messages = $pdo->query($sql)->fetchAll();

        $title = 'Admin - Contact Messages';

        ob_start();
        include 'templates/admincontact.html.php';
        $output = ob_get_clean();

    } 
    else {

        if (isset($_POST['name'])) {

            $sql = 'INSERT INTO contact SET
                name = :name,
                email = :email,
                message = :message';

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':name', $_POST['name']);
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->bindValue(':message', $_POST['message']);
            $stmt->execute();

            $title = 'Message Sent';
            $output = 'Your message has been sent successfully!';

        } else {

            $title = 'Contact Us';

            ob_start();
            include 'templates/contact.html.php';
            $output = ob_get_clean();
        }
    }

} catch (PDOException $e) {
    $title = 'Error';
    $output = $e->getMessage();
}

include 'templates/layout.html.php';
?>