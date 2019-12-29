<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
        <base href="<?php echo '/planandcook/'; ?>">
        <link rel="stylesheet" href="Content/style.css" />
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="global">

        <div id="main-menu">
        <ul>
            <li><img src="Content/images/header.jpg" alt="Plan and Cook"></li>
            <li><a href="<?php echo 'view/Home/index.php'; ?>">Home</a></li>
            <li><a href="<?php echo 'view/Recipes/index.php'; ?>">Recipes</a></li>
            <li><a href="<?php echo 'view/Register/index.php'; ?>">Register</a></li>
            <li><a href="<?php echo 'view/Connection/index.php'; ?>">Connect</a></li>
            </ul>
        </div><!-- #main-menu -->
        <div id="content">
        <?= $content ?>
        </div> <!-- #content -->
        <footer id="footer">
        <p>&copy; <?php echo date('Y');?> Plan & Cook</p>
        </footer>
        </div> <!-- #global -->
    </body>
</html>