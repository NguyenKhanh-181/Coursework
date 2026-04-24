<h2>Contact Messages</h2>

<table border="1">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Reply</th>
</tr>

<?php foreach ($messages as $msg): ?>
<tr>
    <td><?=$msg['name']?></td>
    <td><?=$msg['email']?></td>
    <td><?=$msg['message']?></td>
    <td>

        <?php if ($msg['reply']): ?>
            <p><strong>Admin:</strong> <?=$msg['reply']?></p>

            <form action="editreply.php" method="post">
                <input type="hidden" name="id" value="<?=$msg['id']?>">
                <textarea name="reply"><?=$msg['reply']?></textarea>
                <br>
                <input type="submit" value="Edit">
            </form>

        <?php else: ?>
            <form action="reply.php" method="post">
                <input type="hidden" name="id" value="<?=$msg['id']?>">
                <textarea name="reply"></textarea>
                <br>
                <input type="submit" value="Reply">
            </form>
        <?php endif; ?>

    </td>
</tr>
<?php endforeach; ?>
</table>