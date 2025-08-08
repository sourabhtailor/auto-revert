<?php
// XSS test variation #1165
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>