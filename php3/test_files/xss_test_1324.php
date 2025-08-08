<?php
// XSS test variation #1324
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>