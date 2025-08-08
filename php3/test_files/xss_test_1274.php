<?php
// XSS test variation #1274
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>