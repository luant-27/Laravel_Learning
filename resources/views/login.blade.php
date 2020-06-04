<!DOCTYPE html>

<html>
<body>
<h2>Hello</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginForm" >
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <label>Password:</label><br>
    <input type="password" name="password" ><br><br>
    <input type="submit" name="submit" value="Login">
</form>


</body>
</html>