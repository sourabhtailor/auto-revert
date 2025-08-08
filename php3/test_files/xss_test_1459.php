<?php
// XSS test variation #1459
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>