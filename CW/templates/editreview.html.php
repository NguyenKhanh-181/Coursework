<div class="edit-form">
    <h2>Edit Review</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?=$review['id']?>">
        
        <label for="reviewtext">Review Text:</label>
        <textarea name="reviewtext" id="reviewtext" rows="5" cols="50"><?=$review['reviewtext']?></textarea>
        
        <div class="buttons">
            <input type="submit" value="Save Changes" class="btn-save">
            <a href="reviews.php" class="btn-cancel">Cancel</a>
        </div>
    </form>
</div>

