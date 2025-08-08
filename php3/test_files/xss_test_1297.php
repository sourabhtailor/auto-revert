<?php
// XSS test variation #1297
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>