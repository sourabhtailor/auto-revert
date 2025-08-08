<?php
// XSS test variation #1194
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>