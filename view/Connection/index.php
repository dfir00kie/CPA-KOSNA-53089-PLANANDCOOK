<?php $this->title = "Plan & Cook - Connection" ?>

<p>You need to be connected to access this zone.</p>

<form action="connection/connect" method="post">
    <input name="login" type="text" placeholder="Enter your login" required autofocus>
    <input name="mdp" type="password" placeholder="Enter your password" required>
    <button type="submit">Connexion</button>
</form>

<?php if (isset($msgError)): ?>
    <p><?= $msgError ?></p>
<?php endif; ?>
