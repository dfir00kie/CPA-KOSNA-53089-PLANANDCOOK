<?php $title = 'Plan and Cook'; ?>

<div id=global>
<a href=""><h1>Menu for week <?php echo idate('W');?></h1></a>
    
<?php foreach ($recipes as $recipe): ?>
    <header>
            <a href="<?= "recipe/index/" . $this->clean($recipe['idRecipe']) ?>">
            <h1 class="recipeName"><?= $this->clean($recipe['rec_name']) ?></h1>
            </a>
    </header>
    <?= $this->clean($recipe['rec_content']) ?></h1>
    <?= $this->clean($ingredient['ing_name']) ?></h1>
    
<?php endforeach; ?>