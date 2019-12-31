<?php $title = 'Plan and Cook: Admin'; ?>
<?php require('../../view/template.php'); ?>

<div id=global>
<h2>Admin</h2>
<p>You can manage the content here.</p>


    <div class="actions">
		<li><a class="action" href="<?php echo 'view/Admin/new.php';?>">Add recipe</a></li>
        <li><a class="action" href="">Generate shopping list</a></li>
        <li><a class="action" href="connection/disconnect">Disconnect</a></li>
    </p>
    </div>
    <table class="list">
  	  <tr>
        <th>ID</th>
  	    <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>
	
              <tr>
          <td></td>
    	    <td>Chicken Pineapple Stir Fry</td>
          <td><a class="action" href="view/Admin/show.php?id=">View</a></td>
          <td><a class="action" href="view/Admin/edit.php?id=">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
              <tr>
          <td></td>
    	    <td>Homemade Burgers</td>
          <td><a class="action" href="view/Recipes/show.php?id=">View</a></td>
          <td><a class="action" href="view/Recipes/edit.php?id=">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
              <tr>
          <td></td>
    	    <td>Homemade Fish Sticks</td>
          <td><a class="action" href="view/Admin/show.php?id=">View</a></td>
          <td><a class="action" href="view/Admin/edit.php?id=">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
              <tr>
          <td></td>
    	    <td>Ginger Citrus Salmon</td>
          <td><a class="action" href="view/Admin/show.php?id=">View</a></td>
          <td><a class="action" href="view/Admin/edit.php?id=">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
          </table>
</div>
</div>

