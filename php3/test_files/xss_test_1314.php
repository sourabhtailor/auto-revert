<?php
// XSS test variation #1314
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>