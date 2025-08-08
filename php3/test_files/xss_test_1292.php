<?php
// XSS test variation #1292
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>