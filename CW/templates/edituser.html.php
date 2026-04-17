<h2>Edit User</h2>

<form method="post">
    <input type="hidden" name="id" value="<?=$user['id']?>">

    <label>Username:</label>
    <input type="text" name="username" value="<?=$user['username']?>">

    <label>Password:</label>
    <input type="text" name="password" value="<?=$user['password']?>">

    <label>Email:</label>
    <input type="email" name="email" value="<?=$user['email']?>">

    <br><br>
    <input type="submit" value="Update User">
</form>