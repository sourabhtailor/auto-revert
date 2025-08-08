<?php
// XSS test variation #1479
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>