<?php
// XSS test variation #264
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>