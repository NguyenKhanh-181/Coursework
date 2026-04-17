<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="reviews.css">
        <title><?=$title?></title>
    </head>
    <body>
        <?php if (isset($_SESSION['loggedin'])): ?>
            <div class="user-info">
        <?=ucfirst($_SESSION['role'])?> | <a href="logout.php">Logout</a>
            </div>
        <?php endif; ?> 
        <header><h1>Review Film</h1></header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="reviews.php">Reviews List</a></li>
                <li><a href="addreviews.php">Add Review</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                <li><a href="adminfilms.php">Manage Films</a></li>
                <li><a href="adminusers.php">Manage Users</a></li>
                <?php endif; ?>
                <?php if (isset($_SESSION['loggedin'])): ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>

            </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>&copy; IJDB 2023</footer>
    </body>
    <?php if (isset($_SESSION['loggedin'])): ?>
        <li><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="login.php">Login</a></li>
    <?php endif; ?>
</html>