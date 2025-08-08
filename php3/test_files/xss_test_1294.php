<?php
// XSS test variation #1294
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>