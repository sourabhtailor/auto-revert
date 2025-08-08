<?php
// XSS test variation #1472
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>