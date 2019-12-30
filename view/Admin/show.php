<?php $title = 'Show Recipe'; ?>
<?php require('../../view/template.php');

	$id = $_GET['id'] ?? '1'; 
?>

<div id=global>
<h2>Show Recipe</h2>
<a class="back-link" href="<?php echo 'view/Admin/index.php'; ?>">&laquo; Back to List</a>
<div class="recipe show">
 Page ID: <?php echo $id; ?>
</div>
</div>