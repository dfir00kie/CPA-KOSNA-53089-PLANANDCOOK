<?php $title = 'Recipes'; ?>
<?php require('../../view/template.php'); ?>
<div id=global>

<?php foreach ($recipes as $recipe): ?>

<article>
    <header>
            <a href=""><h1>Menu for week <?php echo idate('W');?></h1></a>
            <p>Plan and Cook: comming soon</p>
            <a href="<?= "Recipes/index/" . $this->clean($recipe['rec_id']) ?>">
            <h1 class="recipeName"><?= $this->clean($recipe['rec_name']) ?></h1>
            </a>
        </header>
</article>
<hr />
<p><?= $this->clean($recipe['rec_content']) ?></p>  
    </article>
    <hr />

    <p><?= $this->clean($recipe['rec_name']) ?> dit :</p>
    <p><?= $this->clean($recipe['rec_content']) ?></p>
<?php endforeach; ?>
<hr />