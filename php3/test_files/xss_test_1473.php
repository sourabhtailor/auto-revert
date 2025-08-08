<?php
// XSS test variation #1473
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>