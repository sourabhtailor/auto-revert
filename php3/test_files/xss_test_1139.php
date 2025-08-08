<?php
// XSS test variation #1139
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>