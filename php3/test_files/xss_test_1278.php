<?php
// XSS test variation #1278
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>