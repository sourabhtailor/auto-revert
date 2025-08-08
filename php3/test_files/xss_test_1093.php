<?php
// XSS test variation #1093
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>