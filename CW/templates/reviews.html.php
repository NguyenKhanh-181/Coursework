<p><?=$totalReviews?> reviews have been submitted to Review Film</p>
<h2>All Reviews</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Text</th>
    <th>Date</th>
    <th>Film</th>
    <th>Reviewer</th>
    <th>Poster</th>
    <th>Action</th>

</tr>

<?php foreach ($reviews as $review): ?>

<tr>
    <td><?=htmlspecialchars($review['id'])?></td>

    <td><?=htmlspecialchars($review['reviewtext'])?></td>

    <td><?=htmlspecialchars($review['reviewdate'])?></td>

    <td><?=htmlspecialchars($review['title'])?></td>
    
    <td><?=htmlspecialchars($review['reviewername'])?></td>

    <td><img src="images/<?=$review['poster']?>" width="80"></td>

    <td>
        <a href="editreview.php?id=<?=$review['id']?>">Edit</a>

                <form action="deletereview.php" method="post">
                <input type="hidden" name="id" value="<?=$review['id']?>">
                <input type="submit" value="Delete">
            </form>
</tr>

<?php endforeach; ?>

</table>
