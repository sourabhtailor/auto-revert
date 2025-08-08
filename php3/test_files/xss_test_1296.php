<?php
// XSS test variation #1296
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>