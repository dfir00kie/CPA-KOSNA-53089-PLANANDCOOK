<?php $this->title = "Plan & Cook - " . $this->clean($recipe['name']); ?>



<article>
    <header>
        <h1 class="recipeName"><?= $this->clean($recipe['name']) ?></h1>
    </header>
    <p><?= $this->clean($ingredient['name']) ?></p>
</article>

<header>
    <h1 id="ingredientName">You will need: <?= $this->clean($ingredient['name']) ?></h1>
</header>

<?php foreach ($ingredients as $ingredient): ?>
    <p><?= $this->clean($ingredient['name']) ?></p>
<?php endforeach; ?>

<article>
    <header>
        <h1 id="ingredientConent">Description:</h1>
        <p><?= $this->clean($recipe['content']) ?></p>
    </header>
</article>

<hr>
<p>
<form method="post" action="recipe/ingredient">
    <input id="id" name="name" type="text" placeholder="Ingredient name" 
           required /><br />
    <input type="hidden" name="id" value="<?= $recipe['id'] ?>" />
    <input type="submit" value="Add Ingredient" />
</form>
</p>
</hr>