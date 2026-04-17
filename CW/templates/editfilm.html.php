<h2>Edit Film</h2>

<form method="post">
    <input type="hidden" name="id" value="<?=$film['id']?>">

    <label>Title:</label>
    <input type="text" name="title" value="<?=$film['title']?>">

    <label>Poster:</label>
    <input type="text" name="poster" value="<?=$film['poster']?>">

    <br><br>
    <input type="submit" value="Update Film">
</form>