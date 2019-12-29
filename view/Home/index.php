<?php $title = 'Plan and Cook'; ?>
<?php require('../../view/template.php'); ?>
<div id=global>
<a href=""><h1>Menu for week <?php echo idate('W');?></h1></a>
<p>To view the menu you need to register.</p>

<?php 
  $recipes = [
    ['id' => '1', 'name' => 'Chicken Pineapple Stir Fry'],
	['id' => '2', 'name' => 'Homemade Burgers'],
	['id' => '3', 'name' => 'Homemade Fish Sticks'],
    ['id' => '4', 'name' => 'Ginger Citrus Salmon'],
    ['id' => '5', 'name' => 'Vegetarian lasagne'],
    ['id' => '6', 'name' => 'Zucchini soup'],
];
    ?>
    
<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Name</th>
  	  </tr>
	
      <?php foreach($recipes as $recipe) { ?>
        <tr>
          <td><?php echo $recipe['id']; ?></td>
          <td><?php echo $recipe['name']; ?></td>
    	  </tr>
      <?php } 
      ?>
  	</table>
</div>