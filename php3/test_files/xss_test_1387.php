<?php
// XSS test variation #1387
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>