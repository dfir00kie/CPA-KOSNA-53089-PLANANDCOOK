<?php $this->title = "Plan & Cook - Connect & Register " ?>


<h1>Connect </h1>
<p>You need to be connected to access this zone.</p>
<br>
<form action="connection/connect" method="post">
    <input name="login" type="text" placeholder="Enter your login" required autofocus>
    <input name="mdp" type="password" placeholder="Enter your password" required>
    <button type="submit">Connect</button>
</form>
</br>

<h1>Register </h1>
<p>Don't have an account yet? You can register here.</p>
<br>
<form action="connection/register" method="post">
    <input name="login" type="text" placeholder="Enter your login" required autofocus>
    <input name="mdp" type="password" placeholder="Enter your password" required>
    <button type="submit">Register</button>
</form>
</br>
<?php if (isset($msgError)): ?>
    <p><?= $msgError ?></p>
<?php endif; ?>
