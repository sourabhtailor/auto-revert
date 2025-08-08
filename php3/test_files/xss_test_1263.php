<?php
// XSS test variation #1263
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>