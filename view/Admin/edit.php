<?php $title = 'Edit Recipe'; ?>
<?php require('../../view/template.php'); ?>


<div id=global>
<h2>Edit Recipe</h2>
<a class="back-link" href="<?php echo 'view/Admin/index.php'; ?>">&laquo; Back to List</a>
<form action="<?php echo '/view/Admin/edit.php?id=' . $id; ?>" method="post">
    <dl>
    <dt>Recipe Name</dt>
    <dd><input type="text" name="rec_name" value="" /></dd>
    </dl>
    <dl>
    <dt>Recipe Content</dt>
    <dd>
    <dd><input type="text" name="rec_content" value="" /></dd>
    </dd>
    </dl>
<div id="operations">
    <input type="submit" value="Edit Recipe" />
    </div>
    </form>
  </div>
</div>

<?php

function redirect_to($location) {
  header("Location: " . $location);
  exit;

} 

if(!isset($_GET['id'])) {
	redirect_to('/view/Recipes/index.php');
}

$id = $_GET['id'];

if(is_post_request()) {

  // Handle form values sent by new.php

  $rec_name = $_POST['rec_name'] ?? '';
  $rec_content = $_POST['rec_content'] ?? '';

  echo "Form parameters<br />";
  echo "Recipe name: " . $rec_name . "<br />";
  echo "Recipe content: " . $rec_content . "<br />";

}
	else {
    redirect_to('/view/Admin/new.php');
  }
  
  ?>
