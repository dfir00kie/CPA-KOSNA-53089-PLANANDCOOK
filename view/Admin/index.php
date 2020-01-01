<?php $this->title = "Plan & Cook - Administration" ?>

<h2>Administration</h2>
<p>You can manage the content here.</p>

<p>Welcome, <?= $this->clean($login) ?> !</p>
<p>This application contains <?= $this->clean($nbRecipes) ?> recipe(s) and <?= $this->clean($nbIngredients) ?> ingredient(s).
<br></p>

    <div class="actions">
		<li><a class="action" href="">Add recipe</a></li>
        <li><a class="action" href="">Generate shopping list</a></li>
        <li><a class="action" href="connection/disconnect">Disconnect</a></li>
    </p>
    </div>
    
        <?php foreach ($recipes as $recipe): ?>
    <header>
            <a href="<?= "recipe/index/" . $this->clean($recipe['id']) ?>">
            <h1 class="recipeName"><?= $this->clean($recipe['name']) ?></h1>
            
            </a>
    </header>
<?php endforeach; ?>