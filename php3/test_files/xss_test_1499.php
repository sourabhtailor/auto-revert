<?php
// XSS test variation #1499
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>