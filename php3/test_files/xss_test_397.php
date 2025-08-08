<?php
// XSS test variation #397
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>