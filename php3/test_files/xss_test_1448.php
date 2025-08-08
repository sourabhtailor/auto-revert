<?php
// XSS test variation #1448
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>