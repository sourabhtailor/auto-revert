<?php
// XSS test variation #1497
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>