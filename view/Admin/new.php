<?php $title = 'Create New Recipe'; ?>
<?php require('../../view/template.php'); ?>

<div id=global>
<h2>Add Recipe</h2>
<a class="back-link" href="<?php echo 'view/Admin/index.php'; ?>">&laquo; Back to List</a>
<form action="view/Admin/create.php" method="post">
    <dt>Name</dt>
    <dd><input type="text" name="rec_name" value="" /></dd>
    </dl>
    <dl>
    <dt>Content</dt>
    <dd><input type="text" name="rec_content" value="" /></dd>
    </dl>
    <dl>
    <div id="operations">
    <input type="submit" value="Add Recipe" />
    </div>
</form>