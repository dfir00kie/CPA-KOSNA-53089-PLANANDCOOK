<?php $title = 'Recipes'; ?>
<?php require('../../view/template.php'); ?>
<div id=global>
<h2>Recipes</h2>
<p>This is the list of all the recipes.</p>

<?php foreach ($recipes as $recipe): ?>

<article>
    <header>

            <a href="<?= "Recipes/index/" . $this->clean($recipe['id']) ?>">
            <h1 class="recipeName"><?= $this->clean($recipe['name']) ?></h1>
            </a>
        </header>
</article>
<hr />
<p><?= $this->clean($recipe['content']) ?></p>  
    </article>
    <hr />

    <p><?= $this->clean($recipe['name']) ?></p>
    <p><?= $this->clean($recipe['content']) ?></p>
    <?php endforeach; ?>
<hr />