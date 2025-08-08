<?php
// XSS test variation #1395
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>