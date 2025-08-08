<?php
// XSS test variation #1076
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>