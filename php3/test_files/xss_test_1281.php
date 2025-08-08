<?php
// XSS test variation #1281
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>