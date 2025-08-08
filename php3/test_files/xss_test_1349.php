<?php
// XSS test variation #1349
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>