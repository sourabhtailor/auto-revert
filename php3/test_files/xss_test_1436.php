<?php
// XSS test variation #1436
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>