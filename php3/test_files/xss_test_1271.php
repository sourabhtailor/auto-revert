<?php
// XSS test variation #1271
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>