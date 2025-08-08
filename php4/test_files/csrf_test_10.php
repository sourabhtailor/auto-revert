<?php
// CSRF test variation #10
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "now in this 2nd file changed";
}
?>
<form method="POST">
    <input type="hidden" name="password" value="newpass123">
    <input type="submit" value="Submit">
</form>
