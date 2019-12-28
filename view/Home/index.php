<?php $title = 'Plan and Cook'; ?>
<?php require('../../view/template.php'); ?>
<div id=global>
<a href=""><h1>Menu for week <?php echo idate('W');?></h1></a>
<p>To view the menu you need to register.</p>

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
    
<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Name</th>
  	  </tr>
	
      <?php foreach($recipes as $recipe) { ?>
        <tr>
          <td><?php echo $recipe['rec_id']; ?></td>
          <td><?php echo $recipe['rec_name']; ?></td>
    	  </tr>
      <?php } 
      ?>
  	</table>
</div>