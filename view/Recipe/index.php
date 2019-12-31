<?php $title = 'Recipes'; ?>
<?php require('../../view/template.php'); ?>
<div id=global>
<h2>Recipes</h2>
<p>This is the list of all the recipes.</p>

<article>
    <header>
        <h1 class="recipeName"><?= $this->clean($recipe['rec_name']) ?></h1>
    </header>
    <p><?= $this->clean($recipe['rec_content']) ?></p>
</article>
<hr />
<header>
    <h1 id="ingredientName">Ingredients of <?= $this->clean($recipe['rec_name']) ?></h1>
</header>
<?php foreach ($ingredients as $ingredient): ?>
    <p><?= $this->clean($ingredient['name']) ?> dit :</p>
<?php endforeach; ?>
<hr />
<form method="post" action="post/comment">
    <input id="ing_id" name="ing_name" type="text" placeholder="Ingredient name" 
           required /><br />
    <textarea id="txtComment" name="content" rows="4" 
              placeholder="Ingredient" required></textarea><br />
    <input type="hidden" name="id" value="<?= $recipe['id'] ?>" />
    <input type="submit" value="addIngredient" />
</form>
