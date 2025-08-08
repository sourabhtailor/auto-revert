<?php
// XSS test variation #1161
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>