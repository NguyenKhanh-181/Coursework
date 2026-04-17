<h2>Login</h2>

<?php if (isset($error)): ?>
<p style="color:red"><?=$error?></p>
<?php endif; ?>

<form method="post">

<label>Username:</label>
<input type="text" name="username">

<label>Password:</label>
<input type="password" name="password">

<input type="submit" value="Login">

</form>