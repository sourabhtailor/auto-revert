<?php
// XSS test variation #1121
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>