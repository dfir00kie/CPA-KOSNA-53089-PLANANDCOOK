<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
        <base href="<?= $webRot ?>" >
        <link rel="stylesheet" href="Content/style.css" />
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="global">
        <img src="Content/images/header.jpg" alt="Plan & Cook: your easy meal planner" />
        <div id="navigation">
            <ul>
            <li><a href="view/viewHome.php">Home</a></li>
            <li><a href="view/viewRecipes.php">Recipes</a></li>
            <li><a href="view/viewMenu.php">Menu</a></li>
            <li><a href="view/viewRegister.php">Register</a></li>
            <li><a href="vieviewLogin.php">Login</a></li>
            </ul>
        </div><!-- #navigation -->
        <div id="content">
        <header>
            <a href=""><h1>Menu for week <?php echo idate('W');?></h1></a>
            <p>Welcome to your weekly meal planner</p>
        </header>
            <?= $content ?>
        </div> <!-- #content -->
        <footer id="footer">
          <p>&copy; <?php echo date('Y');?> Plan & Cook</p>
        </footer>
        </div> <!-- #global -->
    </body>
</html>