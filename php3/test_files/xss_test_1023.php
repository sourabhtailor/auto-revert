<?php
// XSS test variation #1023
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>