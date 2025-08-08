<?php
// XSS test variation #261
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>