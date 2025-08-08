<?php
// CSRF test variation #291
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
check karo    
	echo "Changed password for user!";
}
?>
<form method="POST">
    <input type="hidden" name="password" value="newpass123">
    <input type="submit" value="Submit">
</form>
