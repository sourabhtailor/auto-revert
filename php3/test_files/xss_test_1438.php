<?php
// XSS test variation #1438
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>