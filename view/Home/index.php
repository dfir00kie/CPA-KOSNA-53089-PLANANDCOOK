<?php $title = 'Plan and Cook'; ?>

<div id=global>
<a href=""><h1>Menu for week <?php echo idate('W');?></h1></a>

<?php
  $recipes = [
    ['rec_id' => '1', 'rec_name' => 'Chicken Pineapple Stir Fry'],
	  ['rec_id' => '2', 'rec_name' => 'Homemade Burgers'],
	  ['rec_id' => '3', 'rec_name' => 'Homemade Fish Sticks'],
    ['rec_id' => '4', 'rec_name' => 'Ginger Citrus Salmon'],
    ['rec_id' => '5', 'rec_name' => 'Vegetarian lasagne'],
    ['rec_id' => '6', 'rec_name' => 'Zucchini soup'],
];
    ?>
    
<?php foreach ($recipes as $recipe): ?>
    <header>
            <a href="<?= "Recipes/index/" . $this->clean($recipe['rec_id']) ?>">
            <h1 class="recipeName"><?= $this->clean($recipe['rec_name']) ?></h1>
            </a>
    </header>
<?php endforeach; ?>