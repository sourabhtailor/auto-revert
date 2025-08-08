<?php
// XSS test variation #1101
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>