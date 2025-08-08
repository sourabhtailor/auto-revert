<?php
// XSS test variation #491
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>