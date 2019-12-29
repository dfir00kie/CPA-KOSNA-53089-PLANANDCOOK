<?php $title = 'Create Recipe'; ?>
<?php require('../../view/template.php'); ?>
<div id=global>
<h2>Create Recipe</h2>

<?php function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;

} 
 
if(is_post_request()) {

  // Handle form values sent by new.php

  $name = $_POST['name'] ?? '';
  $content = $_POST['content'] ?? '';

  echo "Form parameters<br />";
  echo "Recipe name: " . $name . "<br />";
  echo "Recipe content: " . $content . "<br />";

} 

else {
  redirect_to('/view/Admin/new.php');
}

?>
