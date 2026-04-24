<h2>Manage Users</h2>

<a href="adduser.php">Add New User</a>

<table border="1">
<tr>
    <th>Username</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php foreach ($users as $user): ?>
<tr>
    <td><?=$user['username']?></td>
    <td><?=$user['email']?></td>
    <td>
        <a href="edituser.php?id=<?=$user['id']?>">Edit</a>

        <form action="deleteuser.php" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?=$user['id']?>">
            <input type="submit" value="Delete">
        </form>
    </td>
</tr>
<?php endforeach; ?>
</table>