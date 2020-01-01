<?php $this->title = "Plan & Cook - Administration" ?>

<h2>Administration</h2>


<p>Welcome, <?= $this->clean($login) ?> !</p>
<p>This application contains <?= $this->clean($nbRecipes) ?> recipe(s) and <?= $this->clean($nbIngredients) ?> ingredient(s).
<br></p>
<p>You can manage the content here.</p>

<h2>Add Recipe</h2>
<p>You can add the recipe here.</p>

<form method="post" action="recipe/recipe">
    <input id="id" name="name" type="text" placeholder="Recipe name" 
           required /><br />
    <br>
    <textarea id="txtComment" name="content" rows="10" 
            placeholder="Recipe content" required></textarea><br />
    </br>
    <input type="hidden" name="id" value="<?= $recipe['id'] ?>" />
    <input type="submit" value="Add Recipe" />
</form>
</p>
</hr>

<h2>Recipes</h2>
<p>You can see the list of all the recipes here.</p>
    
        <?php foreach ($recipes as $recipe): ?>
    <header>
            <a href="<?= "recipe/index/" . $this->clean($recipe['id']) ?>">
            <h1 class="recipeName"><?= $this->clean($recipe['name']) ?></h1>
            
            </a>
    </header>
<?php endforeach; ?>