<?php
// XSS test variation #1149
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>