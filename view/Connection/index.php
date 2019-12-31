<?php $title = 'Connect' ?>
<?php require('../../view/template.php'); ?>

<div id=global>
<h2>Connect</h2>
<p>You need to be connected to access this zone.</p>
<form action="connection/connect" method="post">
    <dl>
    <dt>Login</dt>
    <dd><input type="text" placeholder="Enter Login" name="login" value="" required autofocus /></dd>
    </dl>
    <dl>
    <dt>Password</dt>
    <dd>
    <dd><input type="password" placeholder="Enter Password" name="mdp" value="" required/></dd>
    </dd>
    </dl>
    <div id="operations">
    <input type="submit" value="Connect" />
    </div>
    </form>

<?php if (isset($msgError)): ?>
    <p><?= $msgError ?></p>
<?php endif; ?>
