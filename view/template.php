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
            <li><a href="<?php echo '/planandcook/'; ?>">Home</a></li>
            <li><a href="<?php echo '/planandcook/connection/'; ?>">Login</a></li>
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