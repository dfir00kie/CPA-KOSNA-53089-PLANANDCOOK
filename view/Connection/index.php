<?php $title = 'Connection' ?>
<?php require('../../view/template.php'); ?>

<div id=global>
<h2>Connection</h2>
<p>You need to be connected to access this zone.</p>
<form action="view/Admin/index.php" method="post">
    <dl>
    <dt>Login</dt>
    <dd><input type="text" placeholder="Enter Login" name="login" value="" required autofocus /></dd>
    </dl>
    <dl>
    <dt>Password</dt>
    <dd>
    <dd><input type="password" placeholder="Enter Password" name="pwd" value="" required/></dd>
    </dd>
    </dl>
    <div id="operations">
    <input type="submit" value="Connect" />
    </div>
    </form>

<?php if (isset($msgError)): ?>
    <p><?= $msgError ?></p>
<?php endif; ?>
