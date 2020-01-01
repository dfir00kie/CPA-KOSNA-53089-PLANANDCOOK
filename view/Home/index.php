<?php $this->title = "Plan & Cook"; ?>


<a href=""><h1>List of all recipes </h1></a>
    
<?php foreach ($recipes as $recipe): ?>
    <header>
            <a href="<?= "recipe/index/" . $this->clean($recipe['id']) ?>">
            <h1 class="recipeName"><?= $this->clean($recipe['name']) ?></h1>
            </a>
    </header>
<?php endforeach; ?>

