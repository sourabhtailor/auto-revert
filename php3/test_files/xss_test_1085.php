<?php
// XSS test variation #1085
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>