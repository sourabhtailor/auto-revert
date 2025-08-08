<?php
// XSS test variation #1397
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>