<section id="section-create-recipe">
    <div class="container">
        <h2>What is your recipe ?</h2>
        <form action="submit_recipe.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Recipe name</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Your recipe</label>
                <input type="text" class="form-control" id="content" name="content" aria-describedby="" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit the recipe</button>
            </div>
        </form>
</section>