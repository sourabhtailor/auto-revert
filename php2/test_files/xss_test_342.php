<?php
// XSS test variation #342
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>