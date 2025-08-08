<?php
// XSS test variation #1383
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>