<?php
require_once(__DIR__ . '/includes/isConnect.php');
?>

<form action="comment_post_create.php" method="POST">
    <div class="mb-3 visually-hidden">
        <input class="form-control" type="text" name="recipe_id" value="<?php echo ($recipe['recipe_id']); ?>" />
    </div>
    <div class="mb-3">
        <label for="review" class="form-label">Review this recipe</label>
        <div>
            <input type="radio" id="rateIs1" name="review" value="1">
            <label for="rateIs1">1</label>
        </div>
        <div>
            <input type="radio" id="rateIs2" name="review" value="2">
            <label for="rateIs2">2</label>
        </div>
        <div>
            <input type="radio" id="rateIs3" name="review" value="3">
            <label for="rateIs3">3</label>
        </div>
        <div>
            <input type="radio" id="rateIs4" name="review" value="4">
            <label for="rateIs4">4</label>
        </div>
        <div>
            <input type="radio" id="rateIs5" name="review" value="5">
            <label for="rateIs5">5</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="comment" class="form-label">Post your comment :</label>
        <textarea class="form-control" placeholder="Insert your comment..." id="comment" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>