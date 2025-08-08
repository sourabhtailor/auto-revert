<?php
// XSS test variation #1498
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>