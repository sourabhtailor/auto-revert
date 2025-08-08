<?php
// XSS test variation #1408
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>