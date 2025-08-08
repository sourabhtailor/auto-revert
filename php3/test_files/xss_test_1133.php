<?php
// XSS test variation #1133
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>