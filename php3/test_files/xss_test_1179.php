<?php
// XSS test variation #1179
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>