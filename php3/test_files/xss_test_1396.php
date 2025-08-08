<?php
// XSS test variation #1396
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>