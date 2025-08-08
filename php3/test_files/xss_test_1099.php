<?php
// XSS test variation #1099
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>