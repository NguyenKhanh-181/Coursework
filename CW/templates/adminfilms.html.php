<h2>Manage Films</h2>

<div class ="AddFilmButton">
<a href="addfilm.php">Add New Film</a> </div>

<table border="1">
<tr>
    <th>Title</th>
    <th>Action</th>
</tr>

<?php foreach ($films as $film): ?>
<tr>
    <td><?=$film['title']?></td>
    <td>
        <form action="deletefilm.php" method="post">
            <input type="hidden" name="id" value="<?=$film['id']?>">
            <input type="submit" value="Delete">
        </form>
        <a href="editfilmadmin.php?id=<?=$film['id']?>">Edit</a>
    </td>
</tr>
<?php endforeach; ?>
</table>