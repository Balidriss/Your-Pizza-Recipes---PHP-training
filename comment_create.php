<?php
require_once(__DIR__ . '/includes/isConnect.php');
?>

<form action="comment_post_create.php" method="POST">
    <div class="mb-3 visually-hidden">
        <input class="form-control" type="text" name="recipe_id" value="<?php echo ($recipe['recipe_id']); ?>" />
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Post your comment :</label>
        <textarea class="form-control" placeholder="Insert your comement..." id="comment" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>