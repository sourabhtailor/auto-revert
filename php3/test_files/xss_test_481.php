<?php
// XSS test variation #481
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>