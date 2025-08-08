<?php
// XSS test variation #1266
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>