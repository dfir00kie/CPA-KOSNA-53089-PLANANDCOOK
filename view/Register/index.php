<?php $title = 'Register'; ?>
<?php require('../../view/template.php'); ?>

<div id=global>
<h2>Register</h2>
<form action="view/Admin/index.php" method="post">
    <dl>
    <dt>Login</dt>
    <dd><input type="text" placeholder="Enter Login" name="usr_login" value="" required /></dd>
    </dl>
    <dl>
    <dt>Email</dt>
    <dd><input type="text" placeholder="Enter Email" name="usr_email" value="" required /></dd>
    </dl>
    <dl>
    <dt>Password</dt>
    <dd>
    <dd><input type="password" placeholder="Enter Password" name="pwd" value="" required/></dd>
    </dd>
    </dl>
<div id="operations">
    <input type="submit" value="Register" />
    </div>
    </form>
  </div>
</div>