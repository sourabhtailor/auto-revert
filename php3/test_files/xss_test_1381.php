<?php
// XSS test variation #1381
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>