<?php
// XSS test variation #1078
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>