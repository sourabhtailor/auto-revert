<?php
// XSS test variation #268
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>