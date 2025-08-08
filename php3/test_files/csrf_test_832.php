<?php
// CSRF test variation #832
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Changed password for user!";
}
?>
<form method="POST">
    <input type="hidden" name="password" value="newpass123">
    <input type="submit" value="Submit">
</form>