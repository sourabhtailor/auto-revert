<?php
// XSS test variation #1460
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>