<form action="" method="post">

<div class="AddReviewForm"></div>
<?php
try {
    include 'includes/databaseconnection.php';

    $sql = 'SELECT id, title FROM film';
    $films = $pdo->query($sql);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<label>Film:</label>
<select name="filmid">
    <?php foreach ($films as $film): ?>
        <option value="<?=$film['id']?>"><?=$film['title']?></option>
    <?php endforeach; ?>
</select>
<br>
<label>Reviewer:</label>
<select name="reviewername">
    <?php foreach ($users as $user): ?>
        <option value="<?=$user['username']?>"
            <?php if ($user['username'] == $_SESSION['username']) echo 'selected'; ?>>
            <?=$user['username']?>
        </option>
    <?php endforeach; ?>
</select>
<br>
<label for="reviewtext">Leave your review here:</label>
<textarea name="reviewtext" rows="3" cols="40"></textarea>
<br>
<input type="submit" value="Add">

</form>