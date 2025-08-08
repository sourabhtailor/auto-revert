<?php
// XSS test variation #1071
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>