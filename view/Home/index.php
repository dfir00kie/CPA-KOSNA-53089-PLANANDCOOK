<?php $this->title = "Plan & Cook"; ?>


<h1>Recipes </h1>
<p> Welcome to Plan & Cook: the easy meal planner. </p>
<p> Here you can see the list of available recipes. </p>
    
<?php foreach ($recipes as $recipe): ?>
    <header>
            <a href="<?= "connection/"?>">
            <h1 class="recipeName"><?= $this->clean($recipe['name']) ?></h1>
            
            </a>
    </header>
<?php endforeach; ?>

