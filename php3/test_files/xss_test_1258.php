<?php
// XSS test variation #1258
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>