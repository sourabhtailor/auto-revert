<?php
// Auth Logic #13
session_start();
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
if ($user === 'admin' && $pass === 'password') {
    $_SESSION['auth'] = true;
    echo "Welcome admin!";
} else {
    echo "Invalid credentials";
}
?>
<form method="POST">
<input name="user">
<input name="pass" type="password">
<input type="submit" value="Login">
</form>