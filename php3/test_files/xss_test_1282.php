<?php
// XSS test variation #1282
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>